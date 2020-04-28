<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/admin')->namespace('Admin')->group(function () {
    Route::match(['get', 'post'], '/', 'AdminController@login');
    Route::group(['middleware' => ['admin']], function () {
        Route::get('dashboard', 'AdminController@dashboard');

        //AboutUs Routes//
        Route::get('about-us', 'AboutUsController@index')->name('about.index');
        Route::get('about-us/create', 'AboutUsController@create')->name('about.create');
        Route::post('about-us/store', 'AboutUsController@store')->name('about.store');
        Route::get('about-us/edit/{id}', 'AboutUsController@edit')->name('about.edit');
        Route::post('about-us/update/{id}', 'AboutUsController@update')->name('about.update');
        Route::get('about-us/destroy/{id}', 'AboutUsController@destroy')->name('about.delete');

        //BOD Routes//
        Route::get('bod', 'BODController@index')->name('bod.index');
        Route::get('bod/create', 'BODController@create')->name('bod.create');
        Route::post('bod/store', 'BODController@store')->name('bod.store');
        Route::get('bod/edit/{id}', 'BODController@edit')->name('bod.edit');
        Route::post('bod/update/{id}', 'BODController@update')->name('bod.update');
        Route::get('bod/destroy/{id}', 'BODController@destroy')->name('bod.destroy');

        //TeamMember Routes//
        Route::get('team', 'TeamMemberController@index')->name('team.index');
        Route::get('team/create', 'TeamMemberController@create')->name('team.create');
        Route::post('team/store', 'TeamMemberController@store')->name('team.store');
        Route::get('team/edit/{id}', 'TeamMemberController@edit')->name('team.edit');
        Route::post('team/update/{id}', 'TeamMemberController@update')->name('team.update');
        Route::get('team/destroy/{id}', 'TeamMemberController@destroy')->name('team.destroy');

        //BranchList Routes//
        Route::get('branch', 'BranchListController@index')->name('branches.index');
        Route::get('branch/create', 'BranchListController@create')->name('branches.create');
        Route::post('branch/store', 'BranchListController@store')->name('branches.store');
        Route::get('branch/edit/{id}', 'BranchListController@edit')->name('branches.edit');
        Route::post('branch/update/{id}', 'BranchListController@update')->name('branches.update');
        Route::get('branch/destroy/{id}', 'BranchListController@destroy')->name('branches.destroy');

        //Agents Routes//
        Route::get('agents', 'AgentController@index')->name('agents.index');
        Route::get('agents/create', 'AgentController@create')->name('agents.create');
        Route::post('agents/store', 'AgentController@store')->name('agents.store');
        Route::get('agents/edit/{id}', 'AgentController@edit')->name('agents.edit');
        Route::post('agents/update/{id}', 'AgentController@update')->name('agents.update');
        Route::get('agents/destroy/{id}', 'AgentController@destroy')->name('agents.destroy');

        //Surveyors Routes//
        Route::get('surveyors', 'SurveyorsController@index')->name('surveyors.index');
        Route::get('surveyors/create', 'SurveyorsController@create')->name('surveyors.create');
        Route::post('surveyors/store', 'SurveyorsController@store')->name('surveyors.store');
        Route::get('surveyors/edit/{id}', 'SurveyorsController@edit')->name('surveyors.edit');
        Route::post('surveyors/update/{id}', 'SurveyorsController@update')->name('surveyors.update');
        Route::get('surveyors/destroy/{id}', 'SurveyorsController@destroy')->name('surveyors.destroy');

        //Citizen Charter Routes//
        Route::get('citizens-charter', 'CitizenCharterController@index')->name('citizens.index');
        Route::get('citizens-charter/create', 'CitizenCharterController@create')->name('citizens.create');
        Route::post('citizens-charter/store', 'CitizenCharterController@store')->name('citizens.store');
        Route::get('citizens-charter/edit/{id}', 'CitizenCharterController@edit')->name('citizens.edit');
        Route::post('citizens-charter/update/{id}', 'CitizenCharterController@update')->name('citizens.update');
        Route::get('citizens-charter/destroy/{id}', 'CitizenCharterController@destroy')->name('citizens.destroy');

        //FAQ Routes//
        Route::get('faqs', 'FaqController@index')->name('faqs.index');
        Route::get('faqs/create', 'FaqController@create')->name('faqs.create');
        Route::post('faqs/store', 'FaqController@store')->name('faqs.store');
        Route::get('faqs/edit/{id}', 'FaqController@edit')->name('faqs.edit');
        Route::post('faqs/update/{id}', 'FaqController@update')->name('faqs.update');
        Route::get('faqs/destroy/{id}', 'FaqController@destroy')->name('faqs.destroy');

        //Capital Structure Routes//
        Route::get('capital-structure', 'CapitalStructureController@index')->name('capital.index');
        Route::get('capital-structure/create', 'CapitalStructureController@create')->name('capital.create');
        Route::post('capital-structure/store', 'CapitalStructureController@store')->name('capital.store');
        Route::get('capital-structure/edit/{id}', 'CapitalStructureController@edit')->name('capital.edit');
        Route::post('capital-structure/update/{id}', 'CapitalStructureController@update')->name('capital.update');
        Route::get('capital-structure/destroy/{id}', 'CapitalStructureController@destroy')->name('capital.delete');

        //Premium Structure Routes//
        Route::get('premium-structure', 'PremiumController@index')->name('premium.index');
        Route::get('premium-structure/create', 'PremiumController@create')->name('premium.create');
        Route::post('premium-structure/store', 'PremiumController@store')->name('premium.store');
        Route::get('premium-structure/edit/{id}', 'PremiumController@edit')->name('premium.edit');
        Route::post('premium-structure/update/{id}', 'PremiumController@update')->name('premium.update');
        Route::get('premium-structure/destroy/{id}', 'PremiumController@destroy')->name('premium.delete');

        //Investment Routes//
        Route::get('investment', 'InvestmentController@index')->name('investment.index');
        Route::get('investment/create', 'InvestmentController@create')->name('investment.create');
        Route::post('investment/store', 'InvestmentController@store')->name('investment.store');
        Route::get('investment/edit/{id}', 'InvestmentController@edit')->name('investment.edit');
        Route::post('investment/update/{id}', 'InvestmentController@update')->name('investment.update');
        Route::get('investment/destroy/{id}', 'InvestmentController@destroy')->name('investment.delete');

        //Reserves Routes//
        Route::get('reserves', 'ReserveController@index')->name('reserve.index');
        Route::get('reserves/create', 'ReserveController@create')->name('reserve.create');
        Route::post('reserves/store', 'ReserveController@store')->name('reserve.store');
        Route::get('reserves/edit/{id}', 'ReserveController@edit')->name('reserve.edit');
        Route::post('reserves/update/{id}', 'ReserveController@update')->name('reserve.update');
        Route::get('reserves/destroy/{id}', 'ReserveController@destroy')->name('reserve.delete');

        //Quarterly Report Routes//
        Route::get('quarter', 'QuarterlyController@index')->name('quarter.index');
        Route::get('quarter/create', 'QuarterlyController@create')->name('quarter.create');
        Route::post('quarter/store', 'QuarterlyController@store')->name('quarter.store');
        Route::get('quarter/edit/{id}', 'QuarterlyController@edit')->name('quarter.edit');
        Route::post('quarter/update/{id}', 'QuarterlyController@update')->name('quarter.update');
        Route::get('quarter/destroy/{id}', 'QuarterlyController@destroy')->name('quarter.destroy');

        //Financial Report Controller//
        Route::get('financial', 'FinancialController@index')->name('financial.index');
        Route::get('financial/create', 'FinancialController@create')->name('financial.create');
        Route::post('quarter/store', 'FinancialController@store')->name('financial.store');
        Route::get('financial/edit/{id}', 'FinancialController@edit')->name('financial.edit');
        Route::post('financial/update/{id}', 'FinancialController@update')->name('financial.update');
        Route::get('financial/destroy/{id}', 'FinancialController@destroy')->name('financial.destroy');

        //Re-Insurers Routes//
        Route::get('reinsurer', 'ReinsurerController@index')->name('reinsurer.index');
        Route::get('reinsurer/create', 'ReinsurerController@create')->name('reinsurer.create');
        Route::post('reinsurer/store', 'ReinsurerController@store')->name('reinsurer.store');
        Route::get('reinsurer/edit/{id}', 'ReinsurerController@edit')->name('reinsurer.edit');
        Route::post('reinsurer/update/{id}', 'ReinsurerController@update')->name('reinsurer.update');
        Route::get('reinsurer/destroy/{id}', 'ReinsurerController@destroy')->name('reinsurer.destroy');

        //AGM Minute Routes//
        Route::get('agmMinute', 'AGMController@index')->name('agm.index');
        Route::get('agmMinute/create', 'AGMController@create')->name('agm.create');
        Route::post('agmMinute/store', 'AGMController@store')->name('agm.store');
        Route::get('agmMinute/edit/{id}', 'AGMController@edit')->name('agm.edit');
        Route::post('agmMinute/update/{id}', 'AGMController@update')->name('agm.update');
        Route::get('agmMinute/destroy/{id}', 'AGMController@destroy')->name('agm.destroy');

        //KYC Form Routes//
        Route::get('kycForm', 'KYCController@index')->name('kyc.index');
        Route::get('kycForm/create', 'KYCController@create')->name('kyc.create');
        Route::post('kycForm/store', 'KYCController@store')->name('kyc.store');
        Route::get('kycForm/edit/{id}', 'KYCController@edit')->name('kyc.edit');
        Route::post('kycForm/update/{id}', 'KYCController@update')->name('kyc.update');
        Route::get('kycForm/destroy/{id}', 'KYCController@destroy')->name('kyc.destroy');


        //Claim Form Routes//
        Route::get('claimForm', 'ClaimFormController@index')->name('claim.index');
        Route::get('claimForm/create', 'ClaimFormController@create')->name('claim.create');
        Route::post('claimForm/store', 'ClaimFormController@store')->name('claim.store');
        Route::get('claimForm/edit/{id}', 'ClaimFormController@edit')->name('claim.edit');
        Route::post('claimForm/update/{id}', 'ClaimFormController@update')->name('claim.update');
        Route::get('claimForm/destroy/{id}', 'ClaimFormController@destroy')->name('claim.destroy');


        //RightShare Routes//
        Route::get('rightshare', 'RightShareController@index')->name('rightshare.index');
        Route::get('rightshare/create', 'RightShareController@create')->name('rightshare.create');
        Route::post('rightshare/store', 'RightShareController@store')->name('rightshare.store');
        Route::get('rightshare/edit/{id}', 'RightShareController@edit')->name('rightshare.edit');
        Route::post('rightshare/update/{id}', 'RightShareController@update')->name('rightshare.update');
        Route::get('rightshare/destroy/{id}', 'RightShareController@destroy')->name('rightshare.destroy');

        //Policy Proposal Form Routes//
        Route::get('policyForm', 'PolicyProposalController@index')->name('policyForm.index');
        Route::get('policyForm/create', 'PolicyProposalController@create')->name('policyForm.create');
        Route::post('policyForm/store', 'PolicyProposalController@store')->name('policyForm.store');
        Route::get('policyForm/edit/{id}', 'PolicyProposalController@edit')->name('policyForm.edit');
        Route::post('policyForm/update/{id}', 'PolicyProposalController@update')->name('policyForm.update');
        Route::get('policyForm/destroy/{id}', 'PolicyProposalController@destroy')->name('policyForm.destroy');

    });


});

Route::prefix('/')->namespace('Frontend')->group(function () {
//    Route::redirect('/','/en');

    Route::get('/', 'HomeController@index')->name('home.index');

    //About Us Routes//
    Route::get('/about-us', 'AboutUsController@index');

    //BOD Routes//
    Route::get('/board-of-directors', 'BODController@index');

    //Team Members Routes//
    Route::get('/team-member', 'TeamMemberController@index');

    //Branch List Routes//
    Route::get('/branch-list', 'BranchListController@index');

    //Agents Route//
    Route::get('/agents', 'AgentController@index');

    //Surveyors Routes//
    Route::get('/surveyors', 'SurveyorsController@index');

    //Citizens Charters//
    Route::get('/citizens-charter', 'CitizenCharterController@index');

    //FAQ's Routes//
    Route::get('/faq', 'FaqController@index');

    //Capital Structure Routes//
    Route::get('/capital-structures', 'CapitalStructureController@index');

    //Premium Structure Routes//
    Route::get('/premium-structure', 'PremiumController@index');

    //Premium Structure Routes//
    Route::get('/investment', 'InvestmentController@index');

    //Reserves Routes//
    Route::get('/reserves', 'ReserveController@index');

    //Re-insurers Routes//
    Route::get('/re-insurers', 'ReinsurerController@index');

    //AGM Minute Routes//
    Route::get('/agm-minute', 'AGMController@index');

    //KYC Form Routes//
    Route::get('/kyc-form', 'KYCController@index');

    //Policy Proposal Routes//
    Route::get('/policy-proposal-form', 'PolicyProposalController@index');

    //Right Share Routes//
    Route::get('/right-share', 'RightShareController@index');

    //Claim Form Routes//
    Route::get('/claim-form', 'ClaimFormController@index');

    //Surveyor Listing Application. Form Routes//
    Route::get('/surveyor-listing-application-form', 'SurveyorListingController@index');

    //Our Products Routes//

    //Property Insurance Routes//
    Route::get('/property-insurance','PropertyInsuranceController@index');
});

Route::get('locale/{locale}', function ($locale) {

	Session::put('locale', $locale);

	return redirect()->back();

	/* This link will add session of language when they click to change language*/

});

