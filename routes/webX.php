<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
  BamanagerController,
  BanewsController,
  BacarouselController,
  BacooperativeAgencyController,
  BahealthEducationResourcesController,
  BaactivityRecordController,
  BarelatedLinksController,
  BaselfHelpResourceAreaController,
  BafeaturesController,
  BaintroductionController,
  BacasemanagementController,
  BapsychotherapyController,
  BaoccupationaltherapyController,
  BapharmacycounselingController,
  BafamilyassessmenttreatmentController,
  BateamprofileController,
  BareserveController,
  BahomeController,
  FnPagesController,
  FnreserveController,
  CourseNewsController,
  BaController,
  FnController,
};
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

//後台登入
Route::get('balogin', [BaController::class,'balogin_get']);
Route::post('balogin', [BaController::class,'balogin_post']);
Route::group(['middleware'=>['auth.baadmin']], function(){
  // //後台管員
  // Route::get('bamanager/{id?}', [BamanagerController::class,'bamanager_search']);
  // Route::get('bamanager_add', [BamanagerController::class,'bamanager_add']);
  // Route::post('bamanager_add', [BamanagerController::class,'bamanager_addpost']);
  // Route::get('bamanager_update/{id?}/{pageId?}', [BamanagerController::class,'bamanager_update']);
  // Route::post('bamanager_update/{id?}/{pageId?}', [BamanagerController::class,'bamanager_updatepost']);
  // Route::get('bamanager_passord/{id?}/{pageId?}/{value?}', [BamanagerController::class,'bamanager_password']);
  // Route::get('bamanager_delete/{id?}/{pageId?}', [BamanagerController::class,'bamanager_delete']);
  // //前台輪播
  // Route::get('bacarousel/{id?}', [BacarouselController::class,'bacarousel_search']);
  // Route::get('bacarousel_add', [BacarouselController::class,'bacarousel_add']);
  // Route::post('bacarousel_add', [BacarouselController::class,'bacarousel_addpost']);
  // Route::get('bacarousel_update/{id?}/{pageId?}', [BacarouselController::class,'bacarousel_update']);
  // Route::post('bacarousel_update/{id?}/{pageId?}', [BacarouselController::class,'bacarousel_updatepost']);
  // Route::get('bacarousel_delete/{id?}/{pageId?}', [BacarouselController::class,'bacarousel_delete']);
  // //最新消息
  // Route::get('banews/{id?}', [BanewsController::class,'banews_search']);
  // Route::get('banews_add', [BanewsController::class,'banews_add']);
  // Route::post('banews_add', [BanewsController::class,'banews_addpost']);
  // Route::get('banews_update/{id?}/{pageId?}', [BanewsController::class,'banews_update']);
  // Route::post('banews_update/{id?}/{pageId?}', [BanewsController::class,'banews_updatepost']);
  // Route::get('banews_delete/{id?}/{pageId?}', [BanewsController::class,'banews_delete']);
  // Route::get('banews_appendix_delet/{id?}', [BanewsController::class,'banews_appendix_delet']);
  // //專業課程活動
  // Route::get('bacourse-news/{id?}', [BanewsController::class,'bacourse_news_search']);
  // Route::get('bacourse-news_add', [BanewsController::class,'bacourse_news_add']);
  // Route::post('bacourse-news_add', [BanewsController::class,'bacourse_news_addpost']);
  // Route::get('bacourse-news_update/{id?}/{pageId?}', [BanewsController::class,'bacourse_news_update']);
  // Route::post('bacourse-news_update/{id?}/{pageId?}', [BanewsController::class,'bacourse_news_updatepost']);
  // Route::get('bacourse-news_delete/{id?}/{pageId?}', [BanewsController::class,'bacourse_news_delete']);
  // Route::get('bacourse-news_appendix_delet/{id?}', [BanewsController::class,'bacourse_news_appendix_delet']);
  // //會議資訊
  // Route::get('bameeting/{id?}', [BanewsController::class,'bameeting_search']);
  // Route::get('bameeting_add', [BanewsController::class,'bameeting_add']);
  // Route::post('bameeting_add', [BanewsController::class,'bameeting_addpost']);
  // Route::get('bameeting_update/{id?}/{pageId?}', [BanewsController::class,'bameeting_update']);
  // Route::post('bameeting_update/{id?}/{pageId?}', [BanewsController::class,'bameeting_updatepost']);
  // Route::get('bameeting_delete/{id?}/{pageId?}', [BanewsController::class,'bameeting_delete']);
  // Route::get('bameeting_appendix_delet/{id?}', [BanewsController::class,'bameeting_appendix_delet']);
  // //課程資訊
  // Route::get('bacourseinfo/{id?}', [BanewsController::class,'bacourseinfo_search']);
  // Route::get('bacourseinfo_add', [BanewsController::class,'bacourseinfo_add']);
  // Route::post('bacourseinfo_add', [BanewsController::class,'bacourseinfo_addpost']);
  // Route::get('bacourseinfo_update/{id?}/{pageId?}', [BanewsController::class,'bacourseinfo_update']);
  // Route::post('bacourseinfo_update/{id?}/{pageId?}', [BanewsController::class,'bacourseinfo_updatepost']);
  // Route::get('bacourseinfo_delete/{id?}/{pageId?}', [BanewsController::class,'bacourseinfo_delete']);
  // Route::get('bacourseinfo_appendix_delet/{id?}', [BanewsController::class,'bacourseinfo_appendix_delet']);
  // // 團體課程
  // Route::get('bagroupcourse/{id?}', [BanewsController::class,'bagroupcourse_search']);
  // Route::get('bagroupcourse_add', [BanewsController::class,'bagroupcourse_add']);
  // Route::post('bagroupcourse_add', [BanewsController::class,'bagroupcourse_addpost']);
  // Route::get('bagroupcourse_update/{id?}/{pageId?}', [BanewsController::class,'bagroupcourse_update']);
  // Route::post('bagroupcourse_update/{id?}/{pageId?}', [BanewsController::class,'bagroupcourse_updatepost']);
  // Route::get('bagroupcourse_delete/{id?}/{pageId?}', [BanewsController::class,'bagroupcourse_delete']);
  // Route::get('bagroupcourse_appendix_delet/{id?}', [BanewsController::class,'bagroupcourse_appendix_delet']);
  // // 家屬座談會
  // Route::get('bafamilytalk/{id?}', [BanewsController::class,'bafamilytalk_search']);
  // Route::get('bafamilytalk_add', [BanewsController::class,'bafamilytalk_add']);
  // Route::post('bafamilytalk_add', [BanewsController::class,'bafamilytalk_addpost']);
  // Route::get('bafamilytalk_update/{id?}/{pageId?}', [BanewsController::class,'bafamilytalk_update']);
  // Route::post('bafamilytalk_update/{id?}/{pageId?}', [BanewsController::class,'bafamilytalk_updatepost']);
  // Route::get('bafamilytalk_delete/{id?}/{pageId?}', [BanewsController::class,'bafamilytalk_delete']);
  // Route::get('bafamilytalk_appendix_delet/{id?}', [BanewsController::class,'bafamilytalk_appendix_delet']);
  // // 衛教資訊
  // Route::get('bainformation/{id?}', [BanewsController::class,'bainformation_search']);
  // Route::get('bainformation_add', [BanewsController::class,'bainformation_add']);
  // Route::post('bainformation_add', [BanewsController::class,'bainformation_addpost']);
  // Route::get('bainformation_update/{id?}/{pageId?}', [BanewsController::class,'bainformation_update']);
  // Route::post('bainformation_update/{id?}/{pageId?}', [BanewsController::class,'bainformation_updatepost']);
  // Route::get('bainformation_delete/{id?}/{pageId?}', [BanewsController::class,'bainformation_delete']);
  // Route::get('bainformation_appendix_delet/{id?}', [BanewsController::class,'bainformation_appendix_delet']);
  // // 時事消息
  // Route::get('bainformation/{id?}', [BanewsController::class,'bainformation_search']);
  // Route::get('bainformation_add', [BanewsController::class,'bainformation_add']);
  // Route::post('bainformation_add', [BanewsController::class,'bainformation_addpost']);
  // Route::get('bainformation_update/{id?}/{pageId?}', [BanewsController::class,'bainformation_update']);
  // Route::post('bainformation_update/{id?}/{pageId?}', [BanewsController::class,'bainformation_updatepost']);
  // Route::get('bainformation_delete/{id?}/{pageId?}', [BanewsController::class,'bainformation_delete']);
  // Route::get('bainformation_appendix_delet/{id?}', [BanewsController::class,'bainformation_appendix_delet']);
  // //中心簡介 introduction 
  // Route::get('baintroduction_update', [BaintroductionController::class,'update']);
  // Route::post('baintroduction_update', [BaintroductionController::class,'updatepost']);
  // //專業團隊 團隊簡介 bateamprofile
  // Route::get('bateamprofile/{id?}', [BateamprofileController::class,'search']);
  // Route::get('bateamprofile_add', [BateamprofileController::class,'add']);
  // Route::post('bateamprofile_add', [BateamprofileController::class,'addpost']);
  // Route::get('bateamprofile_update/{id?}/{pageId?}', [BateamprofileController::class,'update']);
  // Route::post('bateamprofile_update/{id?}/{pageId?}', [BateamprofileController::class,'updatepost']);
  // Route::get('bateamprofile_delete/{id?}/{pageId?}', [BateamprofileController::class,'delete']);
  // //個案管理師 case-management
  // Route::get('bacasemanagement_update', [BacasemanagementController::class,'update']);
  // Route::post('bacasemanagement_update', [BacasemanagementController::class,'updatepost']);
  // //心理治療 臨床心理師 psychotherapyt
  // Route::get('bapsychotherapy_update', [BapsychotherapyController::class,'update']);
  // Route::post('bapsychotherapy_update', [BapsychotherapyController::class,'updatepost']);
  // //職能治療 occupational-therapy
  // Route::get('baoccupationaltherapy_update', [BaoccupationaltherapyController::class,'update']);
  // Route::post('baoccupationaltherapy_update', [BaoccupationaltherapyController::class,'updatepost']);
  // //藥物諮詢 藥師 pharmacy-counseling
  // Route::get('bapharmacycounseling_update', [BapharmacycounselingController::class,'update']);
  // Route::post('bapharmacycounseling_update', [BapharmacycounselingController::class,'updatepost']);
  // //家庭評估處遇 社會工作師 family-assessment-treatment
  // Route::get('bafamilyassessmenttreatment_update', [BafamilyassessmenttreatmentController::class,'update']);
  // Route::post('bafamilyassessmenttreatment_update', [BafamilyassessmenttreatmentController::class,'updatepost']);
  // //合作機構 bacooperative-agency
  // Route::get('bacooperativeAgency/{id?}', [BacooperativeAgencyController::class,'search']);
  // Route::get('bacooperativeAgency_add', [BacooperativeAgencyController::class,'add']);
  // Route::post('bacooperativeAgency_add', [BacooperativeAgencyController::class,'addpost']);
  // Route::get('bacooperativeAgency_update/{id?}/{pageId?}', [BacooperativeAgencyController::class,'update']);
  // Route::post('bacooperativeAgency_update/{id?}/{pageId?}', [BacooperativeAgencyController::class,'updatepost']);
  // Route::get('bacooperativeAgency_delete/{id?}/{pageId?}', [BacooperativeAgencyController::class,'delete']);
  // //衛教資源 bahealthEducationResources
  // Route::get('bahealthEducationResources/{id?}', [BahealthEducationResourcesController::class,'search']);
  // Route::get('bahealthEducationResources_add', [BahealthEducationResourcesController::class,'add']);
  // Route::post('bahealthEducationResources_add', [BahealthEducationResourcesController::class,'addpost']);
  // Route::get('bahealthEducationResources_update/{id?}/{pageId?}', [BahealthEducationResourcesController::class,'update']);
  // Route::post('bahealthEducationResources_update/{id?}/{pageId?}', [BahealthEducationResourcesController::class,'updatepost']);
  // Route::get('bahealthEducationResources_delete/{id?}/{pageId?}', [BahealthEducationResourcesController::class,'delete']);
  // //活動紀錄 baactivityRecord
  // Route::get('baactivityRecord/{id?}', [BaactivityRecordController::class,'search']);
  // Route::get('baactivityRecord_add', [BaactivityRecordController::class,'add']);
  // Route::post('baactivityRecord_add', [BaactivityRecordController::class,'addpost']);
  // Route::get('baactivityRecord_update/{id?}/{pageId?}', [BaactivityRecordController::class,'update']);
  // Route::post('baactivityRecord_update/{id?}/{pageId?}', [BaactivityRecordController::class,'updatepost']);
  // Route::get('baactivityRecord_delete/{id?}/{pageId?}', [BaactivityRecordController::class,'delete']);
  // //相關連結 barelatedLinks
  // Route::get('barelatedLinks/{id?}', [BarelatedLinksController::class,'search']);
  // Route::get('barelatedLinks_add', [BarelatedLinksController::class,'add']);
  // Route::post('barelatedLinks_add', [BarelatedLinksController::class,'addpost']);
  // Route::get('barelatedLinks_update/{id?}/{pageId?}', [BarelatedLinksController::class,'update']);
  // Route::post('barelatedLinks_update/{id?}/{pageId?}', [BarelatedLinksController::class,'updatepost']);
  // Route::get('barelatedLinks_delete/{id?}/{pageId?}', [BarelatedLinksController::class,'delete']);
  // //自助資源專區 baselfHelpResourceArea
  // Route::get('baselfHelpResourceArea/{id?}', [BaselfHelpResourceAreaController::class,'search']);
  // Route::get('baselfHelpResourceArea_add', [BaselfHelpResourceAreaController::class,'add']);
  // Route::post('baselfHelpResourceArea_add', [BaselfHelpResourceAreaController::class,'addpost']);
  // Route::get('baselfHelpResourceArea_update/{id?}/{pageId?}', [BaselfHelpResourceAreaController::class,'update']);
  // Route::post('baselfHelpResourceArea_update/{id?}/{pageId?}', [BaselfHelpResourceAreaController::class,'updatepost']);
  // Route::get('baselfHelpResourceArea_delete/{id?}/{pageId?}', [BaselfHelpResourceAreaController::class,'delete']);
  // //網站設定 bafeatures
  // Route::get('bafeatures_update', [BafeaturesController::class,'update']);
  // Route::post('bafeatures_update', [BafeaturesController::class,'updatepost']);
  //後台登出
  Route::get('basignout', [BaController::class,'basignout']);
});


//前台登入
Route::get('/', function () {
  return redirect()->route('fnindex');
});
// Route::get('member', [FnController::class,'fnmember'])->name('fnmember');
// Route::post('member', [FnController::class,'fnmember_post']);
// Route::group(['middleware'=>['auth.fnadmin']], function(){
//   //主選單
//   Route::get('menu', [FnController::class,'fnmenu'])->name('fnmenu');
//   //首頁
//   Route::get('home', [FnController::class,'fnhome'])->name('fnhome');
//   //個案管理 
//   Route::get('case', [FnController::class,'fncase'])->name('fncase');
//   //預約
//   Route::group(['prefix' => '/reserve',], function () {
//     //預約列表-周 ------------------------
//     Route::get('/week/{institutions_id?}', [FnController::class,'fnreserve_week'])->name('fnreserve_week');
//     //預約列表-日 
//     Route::get('/day/{institutions_id?}', [FnController::class,'fnreserve_day'])->name('fnreserve_day');

//     //新增預約 ------------------------
//     Route::get('/add', [FnController::class,'fnreserve_add'])->name('fnreserve_add');
//     //新增預約- 初診
//     Route::post('/add', [FnController::class,'fnreserve_add_post'])->name('fnreserve_add_post');
//     //新增預約- 複診
//     Route::post('/add_visit', [FnController::class,'fnreserve_add_visit'])->name('fnreserve_add_visit');
//     //新增預約- 複診-查詢
//     Route::post('/add_visit_post', [FnController::class,'fnreserve_add_visit_post'])->name('fnreserve_add_visit_post');
//     //新增預約- 複診-預約複診
//     Route::get('/add_visit_get/{patient_id}/{institutions_id}/{doctor_id}/{couple}', [FnController::class,'fnreserve_add_visit_get'])->name('fnreserve_add_visit_get');

//     //預約日期 ------------------------
//     Route::get('/date', [FnController::class,'fnreserve_date'])->name('fnreserve_date');
//     //預約日期 更新時間 
//     Route::post('/date_updateTime', [FnController::class,'fnreserve_date_updateTime'])->name('fnreserve_date_updateTime');
//     //預約日期 確定
//     Route::post('/date_enter', [FnController::class,'fnreserve_date_enter'])->name('fnreserve_date_enter');

//     //搜尋 ------------------------
//     Route::get('/search', [FnController::class,'fnreserve_search'])->name('fnreserve_search');
//     //建立初診 
//     Route::get('/visit', [FnController::class,'fnreserve_visit'])->name('fnreserve_visit');
//   });
//   //個案管理-同意條款說明(2023/6/19) --------------- 
//   Route::get('/case_agree', [FnController::class,'fncase_agree'])->name('fncase_agree');
//   //個案管理-新增個案2
//   Route::get('/case_management', [FnController::class,'fncase_management'])->name('fncase_management');
//   //個案管理-新增個案3
//   Route::get('/case_fill', [FnController::class,'fncase_fill'])->name('fncase_fill');
//   //個案管理-語音
//   Route::get('/case_voice', [FnController::class,'fncase_voice'])->name('fncase_voice');
//   //個案管理-初診紀錄
//   Route::get('/case_visit', [FnController::class,'fncase_visit'])->name('fncase_visit');
//   //個案管理-個案完整病歷
//   Route::get('/case_medical', [FnController::class,'fncase_medical'])->name('fncase_medical');

//   //檢測紀錄管理---------------
//   Route::get('/detection', [FnController::class,'fndetection'])->name('fndetection');
//   //查看
//   Route::get('/detection_check', [FnController::class,'fndetection_check'])->name('fndetection_check');
//   //健康表
//   Route::get('/detection_health', [FnController::class,'fndetection_health'])->name('fndetection_health');

//   //數據中心--------------- 
//   Route::get('/data', [FnController::class,'fndata'])->name('fndata');

//   //系統設定--------------- 
//   Route::get('/system', [FnController::class,'fnsystem'])->name('fnsystem');
//   //編輯帳號
//   Route::get('/system_edit', [FnController::class,'fnsystem_edit'])->name('fnsystem_edit');




//   //負怎紀錄


//   // //???---------------------------------------------------------------------------------------------------
//   // //檢測 fndetection
//   // Route::get('detection', [fndetectionController::class,'fndetection'])->name('fndetection');
//   // //數據中心 badata
//   // Route::get('data', [BadataController::class,'badata'])->name('badata');
//   // //數據中心 basystem
//   // Route::get('system', [BasystemController::class,'basystem'])->name('basystem');
//   // //個案管理 bamanage
//   // Route::get('manage', [BaController::class,'bamanage'])->name('bamanage');
//   // //後台管員
//   // Route::get('bamanager/{id?}', [BamanagerController::class,'bamanager_search']);
//   // Route::get('bamanager_add', [BamanagerController::class,'bamanager_add']);
//   // Route::post('bamanager_add', [BamanagerController::class,'bamanager_addpost']);
//   // Route::get('bamanager_update/{id?}/{pageId?}', [BamanagerController::class,'bamanager_update']);
//   // Route::post('bamanager_update/{id?}/{pageId?}', [BamanagerController::class,'bamanager_updatepost']);
//   // Route::get('bamanager_passord/{id?}/{pageId?}/{value?}', [BamanagerController::class,'bamanager_password']);
//   // Route::get('bamanager_delete/{id?}/{pageId?}', [BamanagerController::class,'bamanager_delete']);
//   // //前台輪播
//   // Route::get('bacarousel/{id?}', [BacarouselController::class,'bacarousel_search']);
//   // Route::get('bacarousel_add', [BacarouselController::class,'bacarousel_add']);
//   // Route::post('bacarousel_add', [BacarouselController::class,'bacarousel_addpost']);
//   // Route::get('bacarousel_update/{id?}/{pageId?}', [BacarouselController::class,'bacarousel_update']);
//   // Route::post('bacarousel_update/{id?}/{pageId?}', [BacarouselController::class,'bacarousel_updatepost']);
//   // Route::get('bacarousel_delete/{id?}/{pageId?}', [BacarouselController::class,'bacarousel_delete']);
//   // //最新消息
//   // Route::get('banews/{id?}', [BanewsController::class,'banews_search']);
//   // Route::get('banews_add', [BanewsController::class,'banews_add']);
//   // Route::post('banews_add', [BanewsController::class,'banews_addpost']);
//   // Route::get('banews_update/{id?}/{pageId?}', [BanewsController::class,'banews_update']);
//   // Route::post('banews_update/{id?}/{pageId?}', [BanewsController::class,'banews_updatepost']);
//   // Route::get('banews_delete/{id?}/{pageId?}', [BanewsController::class,'banews_delete']);
//   // Route::get('banews_appendix_delet/{id?}', [BanewsController::class,'banews_appendix_delet']);
//   // //專業課程活動
//   // Route::get('bacourse-news/{id?}', [BanewsController::class,'bacourse_news_search']);
//   // Route::get('bacourse-news_add', [BanewsController::class,'bacourse_news_add']);
//   // Route::post('bacourse-news_add', [BanewsController::class,'bacourse_news_addpost']);
//   // Route::get('bacourse-news_update/{id?}/{pageId?}', [BanewsController::class,'bacourse_news_update']);
//   // Route::post('bacourse-news_update/{id?}/{pageId?}', [BanewsController::class,'bacourse_news_updatepost']);
//   // Route::get('bacourse-news_delete/{id?}/{pageId?}', [BanewsController::class,'bacourse_news_delete']);
//   // Route::get('bacourse-news_appendix_delet/{id?}', [BanewsController::class,'bacourse_news_appendix_delet']);
//   // //會議資訊
//   // Route::get('bameeting/{id?}', [BanewsController::class,'bameeting_search']);
//   // Route::get('bameeting_add', [BanewsController::class,'bameeting_add']);
//   // Route::post('bameeting_add', [BanewsController::class,'bameeting_addpost']);
//   // Route::get('bameeting_update/{id?}/{pageId?}', [BanewsController::class,'bameeting_update']);
//   // Route::post('bameeting_update/{id?}/{pageId?}', [BanewsController::class,'bameeting_updatepost']);
//   // Route::get('bameeting_delete/{id?}/{pageId?}', [BanewsController::class,'bameeting_delete']);
//   // Route::get('bameeting_appendix_delet/{id?}', [BanewsController::class,'bameeting_appendix_delet']);
//   // //課程資訊
//   // Route::get('bacourseinfo/{id?}', [BanewsController::class,'bacourseinfo_search']);
//   // Route::get('bacourseinfo_add', [BanewsController::class,'bacourseinfo_add']);
//   // Route::post('bacourseinfo_add', [BanewsController::class,'bacourseinfo_addpost']);
//   // Route::get('bacourseinfo_update/{id?}/{pageId?}', [BanewsController::class,'bacourseinfo_update']);
//   // Route::post('bacourseinfo_update/{id?}/{pageId?}', [BanewsController::class,'bacourseinfo_updatepost']);
//   // Route::get('bacourseinfo_delete/{id?}/{pageId?}', [BanewsController::class,'bacourseinfo_delete']);
//   // Route::get('bacourseinfo_appendix_delet/{id?}', [BanewsController::class,'bacourseinfo_appendix_delet']);
//   // // 團體課程
//   // Route::get('bagroupcourse/{id?}', [BanewsController::class,'bagroupcourse_search']);
//   // Route::get('bagroupcourse_add', [BanewsController::class,'bagroupcourse_add']);
//   // Route::post('bagroupcourse_add', [BanewsController::class,'bagroupcourse_addpost']);
//   // Route::get('bagroupcourse_update/{id?}/{pageId?}', [BanewsController::class,'bagroupcourse_update']);
//   // Route::post('bagroupcourse_update/{id?}/{pageId?}', [BanewsController::class,'bagroupcourse_updatepost']);
//   // Route::get('bagroupcourse_delete/{id?}/{pageId?}', [BanewsController::class,'bagroupcourse_delete']);
//   // Route::get('bagroupcourse_appendix_delet/{id?}', [BanewsController::class,'bagroupcourse_appendix_delet']);
//   // // 家屬座談會
//   // Route::get('bafamilytalk/{id?}', [BanewsController::class,'bafamilytalk_search']);
//   // Route::get('bafamilytalk_add', [BanewsController::class,'bafamilytalk_add']);
//   // Route::post('bafamilytalk_add', [BanewsController::class,'bafamilytalk_addpost']);
//   // Route::get('bafamilytalk_update/{id?}/{pageId?}', [BanewsController::class,'bafamilytalk_update']);
//   // Route::post('bafamilytalk_update/{id?}/{pageId?}', [BanewsController::class,'bafamilytalk_updatepost']);
//   // Route::get('bafamilytalk_delete/{id?}/{pageId?}', [BanewsController::class,'bafamilytalk_delete']);
//   // Route::get('bafamilytalk_appendix_delet/{id?}', [BanewsController::class,'bafamilytalk_appendix_delet']);
//   // // 衛教資訊
//   // Route::get('bainformation/{id?}', [BanewsController::class,'bainformation_search']);
//   // Route::get('bainformation_add', [BanewsController::class,'bainformation_add']);
//   // Route::post('bainformation_add', [BanewsController::class,'bainformation_addpost']);
//   // Route::get('bainformation_update/{id?}/{pageId?}', [BanewsController::class,'bainformation_update']);
//   // Route::post('bainformation_update/{id?}/{pageId?}', [BanewsController::class,'bainformation_updatepost']);
//   // Route::get('bainformation_delete/{id?}/{pageId?}', [BanewsController::class,'bainformation_delete']);
//   // Route::get('bainformation_appendix_delet/{id?}', [BanewsController::class,'bainformation_appendix_delet']);
//   // // 時事消息
//   // Route::get('bainformation/{id?}', [BanewsController::class,'bainformation_search']);
//   // Route::get('bainformation_add', [BanewsController::class,'bainformation_add']);
//   // Route::post('bainformation_add', [BanewsController::class,'bainformation_addpost']);
//   // Route::get('bainformation_update/{id?}/{pageId?}', [BanewsController::class,'bainformation_update']);
//   // Route::post('bainformation_update/{id?}/{pageId?}', [BanewsController::class,'bainformation_updatepost']);
//   // Route::get('bainformation_delete/{id?}/{pageId?}', [BanewsController::class,'bainformation_delete']);
//   // Route::get('bainformation_appendix_delet/{id?}', [BanewsController::class,'bainformation_appendix_delet']);
//   // //中心簡介 introduction 
//   // Route::get('baintroduction_update', [BaintroductionController::class,'update']);
//   // Route::post('baintroduction_update', [BaintroductionController::class,'updatepost']);
//   // //專業團隊 團隊簡介 bateamprofile
//   // Route::get('bateamprofile/{id?}', [BateamprofileController::class,'search']);
//   // Route::get('bateamprofile_add', [BateamprofileController::class,'add']);
//   // Route::post('bateamprofile_add', [BateamprofileController::class,'addpost']);
//   // Route::get('bateamprofile_update/{id?}/{pageId?}', [BateamprofileController::class,'update']);
//   // Route::post('bateamprofile_update/{id?}/{pageId?}', [BateamprofileController::class,'updatepost']);
//   // Route::get('bateamprofile_delete/{id?}/{pageId?}', [BateamprofileController::class,'delete']);
//   // //個案管理師 case-management
//   // Route::get('bacasemanagement_update', [BacasemanagementController::class,'update']);
//   // Route::post('bacasemanagement_update', [BacasemanagementController::class,'updatepost']);
//   // //心理治療 臨床心理師 psychotherapyt
//   // Route::get('bapsychotherapy_update', [BapsychotherapyController::class,'update']);
//   // Route::post('bapsychotherapy_update', [BapsychotherapyController::class,'updatepost']);
//   // //職能治療 occupational-therapy
//   // Route::get('baoccupationaltherapy_update', [BaoccupationaltherapyController::class,'update']);
//   // Route::post('baoccupationaltherapy_update', [BaoccupationaltherapyController::class,'updatepost']);
//   // //藥物諮詢 藥師 pharmacy-counseling
//   // Route::get('bapharmacycounseling_update', [BapharmacycounselingController::class,'update']);
//   // Route::post('bapharmacycounseling_update', [BapharmacycounselingController::class,'updatepost']);
//   // //家庭評估處遇 社會工作師 family-assessment-treatment
//   // Route::get('bafamilyassessmenttreatment_update', [BafamilyassessmenttreatmentController::class,'update']);
//   // Route::post('bafamilyassessmenttreatment_update', [BafamilyassessmenttreatmentController::class,'updatepost']);
//   // //合作機構 bacooperative-agency
//   // Route::get('bacooperativeAgency/{id?}', [BacooperativeAgencyController::class,'search']);
//   // Route::get('bacooperativeAgency_add', [BacooperativeAgencyController::class,'add']);
//   // Route::post('bacooperativeAgency_add', [BacooperativeAgencyController::class,'addpost']);
//   // Route::get('bacooperativeAgency_update/{id?}/{pageId?}', [BacooperativeAgencyController::class,'update']);
//   // Route::post('bacooperativeAgency_update/{id?}/{pageId?}', [BacooperativeAgencyController::class,'updatepost']);
//   // Route::get('bacooperativeAgency_delete/{id?}/{pageId?}', [BacooperativeAgencyController::class,'delete']);
//   // //衛教資源 bahealthEducationResources
//   // Route::get('bahealthEducationResources/{id?}', [BahealthEducationResourcesController::class,'search']);
//   // Route::get('bahealthEducationResources_add', [BahealthEducationResourcesController::class,'add']);
//   // Route::post('bahealthEducationResources_add', [BahealthEducationResourcesController::class,'addpost']);
//   // Route::get('bahealthEducationResources_update/{id?}/{pageId?}', [BahealthEducationResourcesController::class,'update']);
//   // Route::post('bahealthEducationResources_update/{id?}/{pageId?}', [BahealthEducationResourcesController::class,'updatepost']);
//   // Route::get('bahealthEducationResources_delete/{id?}/{pageId?}', [BahealthEducationResourcesController::class,'delete']);
//   // //活動紀錄 baactivityRecord
//   // Route::get('baactivityRecord/{id?}', [BaactivityRecordController::class,'search']);
//   // Route::get('baactivityRecord_add', [BaactivityRecordController::class,'add']);
//   // Route::post('baactivityRecord_add', [BaactivityRecordController::class,'addpost']);
//   // Route::get('baactivityRecord_update/{id?}/{pageId?}', [BaactivityRecordController::class,'update']);
//   // Route::post('baactivityRecord_update/{id?}/{pageId?}', [BaactivityRecordController::class,'updatepost']);
//   // Route::get('baactivityRecord_delete/{id?}/{pageId?}', [BaactivityRecordController::class,'delete']);
//   // //相關連結 barelatedLinks
//   // Route::get('barelatedLinks/{id?}', [BarelatedLinksController::class,'search']);
//   // Route::get('barelatedLinks_add', [BarelatedLinksController::class,'add']);
//   // Route::post('barelatedLinks_add', [BarelatedLinksController::class,'addpost']);
//   // Route::get('barelatedLinks_update/{id?}/{pageId?}', [BarelatedLinksController::class,'update']);
//   // Route::post('barelatedLinks_update/{id?}/{pageId?}', [BarelatedLinksController::class,'updatepost']);
//   // Route::get('barelatedLinks_delete/{id?}/{pageId?}', [BarelatedLinksController::class,'delete']);
//   // //自助資源專區 baselfHelpResourceArea
//   // Route::get('baselfHelpResourceArea/{id?}', [BaselfHelpResourceAreaController::class,'search']);
//   // Route::get('baselfHelpResourceArea_add', [BaselfHelpResourceAreaController::class,'add']);
//   // Route::post('baselfHelpResourceArea_add', [BaselfHelpResourceAreaController::class,'addpost']);
//   // Route::get('baselfHelpResourceArea_update/{id?}/{pageId?}', [BaselfHelpResourceAreaController::class,'update']);
//   // Route::post('baselfHelpResourceArea_update/{id?}/{pageId?}', [BaselfHelpResourceAreaController::class,'updatepost']);
//   // Route::get('baselfHelpResourceArea_delete/{id?}/{pageId?}', [BaselfHelpResourceAreaController::class,'delete']);
//   // //網站設定 bafeatures
//   // Route::get('bafeatures_update', [BafeaturesController::class,'update']);
//   // Route::post('bafeatures_update', [BafeaturesController::class,'updatepost']);
//   // //後台登出
//   // Route::get('basignout', [BaController::class,'basignout']);
// });



//自定義插建
// Route::get('customplug', [FnPagesController::class, 'customplug'])->name('customplug');



