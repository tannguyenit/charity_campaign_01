<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Repositories\Campaign\CampaignRepositoryInterface;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Models\Campaign;
use App\Repositories\Contribution\ContributionRepositoryInterface;
use App\Repositories\Rating\RatingRepositoryInterface;

class CampaignController extends Controller
{

    protected $campaignRepository;
    protected $campaign;
    protected $categoryRepository;
    protected $contributionRepository;
    protected $ratingRepository;

    public function __construct(CampaignRepositoryInterface $campaignRepository,
                                Campaign $campaign,
                                CategoryRepositoryInterface $categoryRepository,
                                ContributionRepositoryInterface $contributionRepository,
                                RatingRepositoryInterface $ratingRepository)
    {
        $this->campaignRepository = $campaignRepository;
        $this->campaign = $campaign;
        $this->categoryRepository = $categoryRepository;
        $this->contributionRepository = $contributionRepository;
        $this->ratingRepository = $ratingRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campaigns = $this->campaignRepository->getAll()->paginate(config('constants.PAGINATE'));

        return view('campaign.index', compact('campaigns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->categoryRepository->all();

        return view('campaign.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->campaign->rules);

        $input = $request->only([
            'name',
            'image',
            'start_date',
            'end_date',
            'address',
            'description',
            'category_id',
        ]);

        $campaign = $this->campaignRepository->createCampaign($input);

        if (!$campaign) {
            return redirect(action('CampaignController@create'))
                ->withMessage(trans('campaign.create_error'));
        }

        return redirect(action('CampaignController@show', ['id' => $campaign->id]))
            ->with(['alert-success' => trans('campaign.create_success')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $campaign = $this->campaignRepository->getDetail($id);
        } catch (ModelNotFoundException $e) {
            return abort(404);
        }

        if (!$campaign) {
            return abort(404);
        }

        // get list contributions
        $contributions = $this->contributionRepository->getContributions($id)->get();

        // get total contributions
        $results = $this->contributionRepository->getValueContribution($id);

        // check user had join campaign
        $userCampaign = $this->campaignRepository->checkUserCampaign([
            'user_id' => auth()->id(),
            'campaign_id' => $id,
        ]);

        // get averageRankingCampaign
        $averageRanking = $this->ratingRepository->averageRatingCampaign($campaign->id);

        // get rating chart
        $ratingChart = $this->ratingRepository->getRatingChart($id);

        return view('campaign.show', compact('campaign', 'categories', 'contributions', 'results', 'userCampaign',
            'averageRanking', 'ratingChart'));
    }

    public function joinOrLeaveCampaign(Request $request)
    {
        if ($request->ajax()){
            $inputs = $request->only([
                'campaign_id',
            ]);

            $inputs['user_id'] = auth()->id();

            $result = $this->campaignRepository->joinOrLeaveCampaign($inputs);

            return response()->json($result);
        }
    }

    public function approveOrRemove(Request $request)
    {
        if ($request->ajax()){
            $inputs = $request->only([
                'campaign_id',
                'user_id',
            ]);

            $result = $this->campaignRepository->approveOrRemove($inputs);

            return response()->json($result);
        }
    }

    public function activeOrCloseCampaign(Request $request)
    {
        if ($request->ajax()){
            $inputs = $request->only([
                'campaign_id',
            ]);

            $result = $this->campaignRepository->activeOrCloseCampaign($inputs);

            return response()->json($result);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
