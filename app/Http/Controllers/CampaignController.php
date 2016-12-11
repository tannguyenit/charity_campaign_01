<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Campaign\CampaignRepositoryInterface;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Models\Campaign;

class CampaignController extends Controller
{

    protected $campaignRepository;
    protected $campaign;
    protected $categoryRepository;

    public function __construct(CampaignRepositoryInterface $campaignRepository, Campaign $campaign,
                                CategoryRepositoryInterface $categoryRepository)
    {
        $this->campaignRepository = $campaignRepository;
        $this->campaign = $campaign;
        $this->categoryRepository = $categoryRepository;
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
        return view('campaign.create');
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

        $categories = $this->categoryRepository->all();

        return view('campaign.show', compact('campaign', 'categories'));
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
