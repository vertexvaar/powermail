<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "powermail".
 *
 * Auto generated 10-06-2013 23:18
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'powermail',
	'description' => 'Powermail is a well-known, powerful and easy to use mailform extension with a lots of features (spam prevention, marketing, double-optin, etc...)',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '2.0.7',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'beta',
	'uploadfolder' => 0,
	'createDirs' => 'uploads/tx_powermail',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Powermail dev team',
	'author_email' => 'alexander.kellner@in2code.de',
	'author_company' => 'in2code.de',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.6.0-7.0.0',
			'cms' => '',
			'extbase' => '',
			'fluid' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:226:{s:21:"ext_conf_template.txt";s:4:"4301";s:12:"ext_icon.gif";s:4:"be45";s:17:"ext_localconf.php";s:4:"0573";s:14:"ext_tables.php";s:4:"92e6";s:14:"ext_tables.sql";s:4:"3755";s:38:"Classes/Controller/FormsController.php";s:4:"3260";s:39:"Classes/Controller/ModuleController.php";s:4:"44df";s:39:"Classes/Controller/OutputController.php";s:4:"4825";s:32:"Classes/Domain/Model/Answers.php";s:4:"806d";s:31:"Classes/Domain/Model/Fields.php";s:4:"c945";s:30:"Classes/Domain/Model/Forms.php";s:4:"35e7";s:30:"Classes/Domain/Model/Mails.php";s:4:"3c3b";s:30:"Classes/Domain/Model/Pages.php";s:4:"6909";s:29:"Classes/Domain/Model/User.php";s:4:"e185";s:34:"Classes/Domain/Model/UserGroup.php";s:4:"60fe";s:47:"Classes/Domain/Repository/AnswersRepository.php";s:4:"09b9";s:46:"Classes/Domain/Repository/FieldsRepository.php";s:4:"68e6";s:45:"Classes/Domain/Repository/FormsRepository.php";s:4:"3b1d";s:45:"Classes/Domain/Repository/MailsRepository.php";s:4:"8809";s:45:"Classes/Domain/Repository/PagesRepository.php";s:4:"5422";s:44:"Classes/Domain/Repository/UserRepository.php";s:4:"4470";s:45:"Classes/Domain/Validator/CaptchaValidator.php";s:4:"fe37";s:44:"Classes/Domain/Validator/CustomValidator.php";s:4:"89f1";s:47:"Classes/Domain/Validator/MandatoryValidator.php";s:4:"cb65";s:48:"Classes/Domain/Validator/SpamShieldValidator.php";s:4:"3ac9";s:44:"Classes/Domain/Validator/StringValidator.php";s:4:"b1fb";s:44:"Classes/Domain/Validator/UploadValidator.php";s:4:"52d3";s:38:"Classes/Utility/CalculatingCaptcha.php";s:4:"fba7";s:23:"Classes/Utility/Div.php";s:4:"1396";s:34:"Classes/Utility/EidGetLocation.php";s:4:"5e13";s:33:"Classes/Utility/EvaluateEmail.php";s:4:"edc4";s:41:"Classes/Utility/FieldSelectorUserFunc.php";s:4:"8fd6";s:33:"Classes/Utility/InitialMarker.php";s:4:"d92b";s:26:"Classes/Utility/Marker.php";s:4:"cb48";s:30:"Classes/Utility/MarkerBase.php";s:4:"cb55";s:29:"Classes/Utility/Marketing.php";s:4:"e514";s:30:"Classes/Utility/PluginInfo.php";s:4:"dee0";s:31:"Classes/Utility/SaveToTable.php";s:4:"06b3";s:27:"Classes/Utility/WizIcon.php";s:4:"4040";s:54:"Classes/ViewHelpers/BeCheck/ExtMngConfigViewHelper.php";s:4:"0ce0";s:49:"Classes/ViewHelpers/BeCheck/SessionViewHelper.php";s:4:"25dc";s:51:"Classes/ViewHelpers/BeCheck/T3VersionViewHelper.php";s:4:"d152";s:55:"Classes/ViewHelpers/BeCheck/UploadsFolderViewHelper.php";s:4:"fcfb";s:59:"Classes/ViewHelpers/Condition/IsAllowedToEditViewHelper.php";s:4:"d946";s:51:"Classes/ViewHelpers/Condition/IsArrayViewHelper.php";s:4:"0a96";s:72:"Classes/ViewHelpers/Condition/IsDateTimeVariableInVariableViewHelper.php";s:4:"ac92";s:52:"Classes/ViewHelpers/Condition/IsNumberViewHelper.php";s:4:"1bbb";s:60:"Classes/ViewHelpers/Condition/IsStringInStringViewHelper.php";s:4:"e993";s:74:"Classes/ViewHelpers/Condition/IsThereAMailWithStartingLetterViewHelper.php";s:4:"f79c";s:46:"Classes/ViewHelpers/Condition/OrViewHelper.php";s:4:"1e7a";s:53:"Classes/ViewHelpers/Form/AdvancedSelectViewHelper.php";s:4:"7960";s:50:"Classes/ViewHelpers/Form/SelectFieldViewHelper.php";s:4:"3bcc";s:61:"Classes/ViewHelpers/Getter/GetFieldLabelFromUidViewHelper.php";s:4:"c25a";s:62:"Classes/ViewHelpers/Getter/GetFieldMarkerFromUidViewHelper.php";s:4:"2f60";s:59:"Classes/ViewHelpers/Getter/GetPageNameFromUidViewHelper.php";s:4:"7de3";s:60:"Classes/ViewHelpers/Getter/GetPiVarAnswerFieldViewHelper.php";s:4:"55ca";s:46:"Classes/ViewHelpers/Misc/CaptchaViewHelper.php";s:4:"dadd";s:53:"Classes/ViewHelpers/Misc/ContentElementViewHelper.php";s:4:"44ed";s:49:"Classes/ViewHelpers/Misc/ErrorClassViewHelper.php";s:4:"b597";s:52:"Classes/ViewHelpers/Misc/MorestepClassViewHelper.php";s:4:"bc30";s:51:"Classes/ViewHelpers/Misc/PrefillFieldViewHelper.php";s:4:"fcae";s:54:"Classes/ViewHelpers/Misc/ValidationClassViewHelper.php";s:4:"b4e8";s:57:"Classes/ViewHelpers/Misc/VariableInVariableViewHelper.php";s:4:"0ae5";s:48:"Classes/ViewHelpers/Misc/VariablesViewHelper.php";s:4:"b1c0";s:65:"Classes/ViewHelpers/Reporting/GetLabelsGoogleChartsViewHelper.php";s:4:"3ea3";s:65:"Classes/ViewHelpers/Reporting/GetValuesGoogleChartsViewHelper.php";s:4:"4b33";s:47:"Classes/ViewHelpers/String/EncodeViewHelper.php";s:4:"7a20";s:48:"Classes/ViewHelpers/String/ExplodeViewHelper.php";s:4:"01cf";s:53:"Classes/ViewHelpers/String/ImplodeFieldViewHelper.php";s:4:"9fa8";s:56:"Classes/ViewHelpers/String/RawAndRemoveXssViewHelper.php";s:4:"5100";s:52:"Classes/ViewHelpers/String/RemoveQuoteViewHelper.php";s:4:"c757";s:45:"Classes/ViewHelpers/String/TrimViewHelper.php";s:4:"6c9e";s:68:"Classes/ViewHelpers/String/UnderscoredToLowerCamelCaseViewHelper.php";s:4:"6683";s:46:"Classes/ViewHelpers/String/UpperViewHelper.php";s:4:"b7e4";s:51:"Classes/ViewHelpers/String/Utf8DecodeViewHelper.php";s:4:"f651";s:44:"Configuration/ExtensionBuilder/settings.yaml";s:4:"fdad";s:40:"Configuration/FlexForms/flexform_pi1.xml";s:4:"510d";s:40:"Configuration/FlexForms/flexform_pi2.xml";s:4:"a0cd";s:29:"Configuration/TCA/Answers.php";s:4:"b6b1";s:28:"Configuration/TCA/Fields.php";s:4:"110e";s:27:"Configuration/TCA/Forms.php";s:4:"bcee";s:27:"Configuration/TCA/Mails.php";s:4:"6e0e";s:27:"Configuration/TCA/Pages.php";s:4:"28cc";s:47:"Configuration/TypoScript/CssBasic/constants.txt";s:4:"20ba";s:43:"Configuration/TypoScript/CssBasic/setup.txt";s:4:"d867";s:47:"Configuration/TypoScript/CssFancy/constants.txt";s:4:"20e8";s:43:"Configuration/TypoScript/CssFancy/setup.txt";s:4:"bb84";s:43:"Configuration/TypoScript/Main/constants.txt";s:4:"3f24";s:39:"Configuration/TypoScript/Main/setup.txt";s:4:"aad3";s:44:"Configuration/TypoScript/Marketing/setup.txt";s:4:"1d5e";s:57:"Configuration/TypoScript/Powermail_Frontend/constants.txt";s:4:"d41d";s:53:"Configuration/TypoScript/Powermail_Frontend/setup.txt";s:4:"107d";s:34:"Resources/Private/Fonts/ARCADE.TTF";s:4:"f841";s:38:"Resources/Private/Image/captcha_bg.png";s:4:"a635";s:40:"Resources/Private/Language/locallang.xml";s:4:"b858";s:78:"Resources/Private/Language/locallang_csh_tx_powermail_domain_model_answers.xml";s:4:"2f84";s:77:"Resources/Private/Language/locallang_csh_tx_powermail_domain_model_fields.xml";s:4:"64f0";s:76:"Resources/Private/Language/locallang_csh_tx_powermail_domain_model_forms.xml";s:4:"87db";s:76:"Resources/Private/Language/locallang_csh_tx_powermail_domain_model_mails.xml";s:4:"7ec1";s:76:"Resources/Private/Language/locallang_csh_tx_powermail_domain_model_pages.xml";s:4:"0064";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"0f99";s:44:"Resources/Private/Language/locallang_mod.xml";s:4:"e352";s:38:"Resources/Private/Layouts/Backend.html";s:4:"5b32";s:38:"Resources/Private/Layouts/Default.html";s:4:"d91a";s:37:"Resources/Private/Layouts/Export.html";s:4:"3562";s:35:"Resources/Private/Layouts/Mail.html";s:4:"3562";s:43:"Resources/Private/Layouts/PowermailAll.html";s:4:"109e";s:41:"Resources/Private/Partials/FormError.html";s:4:"1182";s:55:"Resources/Private/Partials/GoogleAdwordsConversion.html";s:4:"0073";s:40:"Resources/Private/Partials/HoneyPod.html";s:4:"105e";s:52:"Resources/Private/Partials/MarketingInformation.html";s:4:"2252";s:45:"Resources/Private/Partials/Forms/Captcha.html";s:4:"005a";s:43:"Resources/Private/Partials/Forms/Check.html";s:4:"20e6";s:45:"Resources/Private/Partials/Forms/Content.html";s:4:"bd6f";s:42:"Resources/Private/Partials/Forms/Date.html";s:4:"ef27";s:42:"Resources/Private/Partials/Forms/File.html";s:4:"1466";s:44:"Resources/Private/Partials/Forms/Hidden.html";s:4:"fc6e";s:42:"Resources/Private/Partials/Forms/Html.html";s:4:"0e97";s:43:"Resources/Private/Partials/Forms/Input.html";s:4:"09a7";s:46:"Resources/Private/Partials/Forms/Location.html";s:4:"45a2";s:46:"Resources/Private/Partials/Forms/Password.html";s:4:"bb3f";s:43:"Resources/Private/Partials/Forms/Radio.html";s:4:"8160";s:43:"Resources/Private/Partials/Forms/Reset.html";s:4:"1105";s:44:"Resources/Private/Partials/Forms/Select.html";s:4:"240d";s:44:"Resources/Private/Partials/Forms/Submit.html";s:4:"e222";s:42:"Resources/Private/Partials/Forms/Text.html";s:4:"1a75";s:46:"Resources/Private/Partials/Forms/Textarea.html";s:4:"2cf8";s:48:"Resources/Private/Partials/Forms/Typoscript.html";s:4:"50cd";s:47:"Resources/Private/Partials/Module/ExportBe.html";s:4:"298f";s:47:"Resources/Private/Partials/Module/FilterBe.html";s:4:"946b";s:47:"Resources/Private/Partials/Module/SearchBe.html";s:4:"c219";s:42:"Resources/Private/Partials/Output/Abc.html";s:4:"9f65";s:45:"Resources/Private/Partials/Output/Export.html";s:4:"aa59";s:45:"Resources/Private/Partials/Output/Search.html";s:4:"0a61";s:50:"Resources/Private/Partials/Output/Field/Check.html";s:4:"893f";s:50:"Resources/Private/Partials/Output/Field/Input.html";s:4:"3cb8";s:50:"Resources/Private/Partials/Output/Field/Radio.html";s:4:"c892";s:51:"Resources/Private/Partials/Output/Field/Select.html";s:4:"84ce";s:53:"Resources/Private/Partials/Output/Field/Textarea.html";s:4:"bd6d";s:51:"Resources/Private/Templates/Forms/Confirmation.html";s:4:"8795";s:45:"Resources/Private/Templates/Forms/Create.html";s:4:"64c8";s:43:"Resources/Private/Templates/Forms/Form.html";s:4:"923c";s:51:"Resources/Private/Templates/Forms/OptinConfirm.html";s:4:"b996";s:51:"Resources/Private/Templates/Forms/PowermailAll.html";s:4:"91c5";s:48:"Resources/Private/Templates/Mails/OptinMail.html";s:4:"ef4d";s:51:"Resources/Private/Templates/Mails/ReceiverMail.html";s:4:"3be8";s:49:"Resources/Private/Templates/Mails/SenderMail.html";s:4:"50c4";s:47:"Resources/Private/Templates/Module/CheckBe.html";s:4:"243b";s:51:"Resources/Private/Templates/Module/ExportCsvBe.html";s:4:"1685";s:51:"Resources/Private/Templates/Module/ExportXlsBe.html";s:4:"4cac";s:46:"Resources/Private/Templates/Module/ListBe.html";s:4:"2e12";s:51:"Resources/Private/Templates/Module/ReportingBe.html";s:4:"3708";s:55:"Resources/Private/Templates/Module/ReportingFormBe.html";s:4:"45f2";s:60:"Resources/Private/Templates/Module/ReportingMarketingBe.html";s:4:"f8e5";s:44:"Resources/Private/Templates/Output/Edit.html";s:4:"c5b3";s:49:"Resources/Private/Templates/Output/ExportCsv.html";s:4:"a6f1";s:49:"Resources/Private/Templates/Output/ExportXls.html";s:4:"71d4";s:44:"Resources/Private/Templates/Output/List.html";s:4:"efd7";s:43:"Resources/Private/Templates/Output/Rss.html";s:4:"04f0";s:44:"Resources/Private/Templates/Output/Show.html";s:4:"2663";s:66:"Resources/Private/Templates/ViewHelpers/Widget/Paginate/Index.html";s:4:"55e2";s:32:"Resources/Public/Css/Backend.css";s:4:"a7ff";s:33:"Resources/Public/Css/CssBasic.css";s:4:"ba3e";s:33:"Resources/Public/Css/CssFancy.css";s:4:"fc41";s:45:"Resources/Public/Css/jquery.ui.datepicker.css";s:4:"ec61";s:40:"Resources/Public/Css/jquery.ui.theme.css";s:4:"9299";s:33:"Resources/Public/Icons/ce_wiz.gif";s:4:"631a";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:60:"Resources/Public/Icons/tx_powermail_domain_model_answers.gif";s:4:"c638";s:59:"Resources/Public/Icons/tx_powermail_domain_model_fields.gif";s:4:"9a15";s:62:"Resources/Public/Icons/tx_powermail_domain_model_fields__h.gif";s:4:"07b3";s:63:"Resources/Public/Icons/tx_powermail_domain_model_fields__ht.gif";s:4:"3c06";s:62:"Resources/Public/Icons/tx_powermail_domain_model_fields__t.gif";s:4:"976c";s:58:"Resources/Public/Icons/tx_powermail_domain_model_forms.gif";s:4:"80fe";s:61:"Resources/Public/Icons/tx_powermail_domain_model_forms__h.gif";s:4:"b151";s:62:"Resources/Public/Icons/tx_powermail_domain_model_forms__ht.gif";s:4:"f7e7";s:61:"Resources/Public/Icons/tx_powermail_domain_model_forms__t.gif";s:4:"4893";s:58:"Resources/Public/Icons/tx_powermail_domain_model_mails.gif";s:4:"fcba";s:65:"Resources/Public/Icons/tx_powermail_domain_model_mails.gif__h.gif";s:4:"2f4b";s:65:"Resources/Public/Icons/tx_powermail_domain_model_mails.gif__t.gif";s:4:"2f4b";s:58:"Resources/Public/Icons/tx_powermail_domain_model_pages.gif";s:4:"35ac";s:61:"Resources/Public/Icons/tx_powermail_domain_model_pages__h.gif";s:4:"ebeb";s:62:"Resources/Public/Icons/tx_powermail_domain_model_pages__ht.gif";s:4:"4f86";s:61:"Resources/Public/Icons/tx_powermail_domain_model_pages__t.gif";s:4:"14bb";s:34:"Resources/Public/Image/captcha.png";s:4:"5c37";s:37:"Resources/Public/Image/chart_form.png";s:4:"2439";s:42:"Resources/Public/Image/chart_marketing.png";s:4:"ad51";s:37:"Resources/Public/Image/icon-check.png";s:4:"1abb";s:42:"Resources/Public/Image/icon-notchecked.png";s:4:"4ba1";s:40:"Resources/Public/Image/icon_calendar.png";s:4:"c695";s:35:"Resources/Public/Image/icon_csv.gif";s:4:"ddf9";s:37:"Resources/Public/Image/icon_error.png";s:4:"5a47";s:34:"Resources/Public/Image/icon_ok.png";s:4:"788f";s:35:"Resources/Public/Image/icon_rss.gif";s:4:"d849";s:43:"Resources/Public/Image/icon_sorting_asc.png";s:4:"f6db";s:44:"Resources/Public/Image/icon_sorting_desc.png";s:4:"3d6a";s:35:"Resources/Public/Image/icon_xls.gif";s:4:"f031";s:45:"Resources/Public/Image/reportingGraphics.bmml";s:4:"ac8f";s:36:"Resources/Public/Image/upload_bg.png";s:4:"2017";s:56:"Resources/Public/Image/Ui/ui-bg_flat_0_aaaaaa_40x100.png";s:4:"2a44";s:57:"Resources/Public/Image/Ui/ui-bg_flat_75_ffffff_40x100.png";s:4:"8692";s:57:"Resources/Public/Image/Ui/ui-bg_glass_55_fbf9ee_1x400.png";s:4:"f8f4";s:57:"Resources/Public/Image/Ui/ui-bg_glass_65_ffffff_1x400.png";s:4:"e5a8";s:57:"Resources/Public/Image/Ui/ui-bg_glass_75_dadada_1x400.png";s:4:"c12c";s:57:"Resources/Public/Image/Ui/ui-bg_glass_75_e6e6e6_1x400.png";s:4:"f425";s:57:"Resources/Public/Image/Ui/ui-bg_glass_95_fef1ec_1x400.png";s:4:"5a3b";s:66:"Resources/Public/Image/Ui/ui-bg_highlight-soft_75_cccccc_1x100.png";s:4:"72c5";s:53:"Resources/Public/Image/Ui/ui-icons_222222_256x240.png";s:4:"9129";s:53:"Resources/Public/Image/Ui/ui-icons_2e83ff_256x240.png";s:4:"2516";s:53:"Resources/Public/Image/Ui/ui-icons_454545_256x240.png";s:4:"7710";s:53:"Resources/Public/Image/Ui/ui-icons_888888_256x240.png";s:4:"faf6";s:53:"Resources/Public/Image/Ui/ui-icons_cd0a0a_256x240.png";s:4:"5d88";s:33:"Resources/Public/Js/be_effects.js";s:4:"8c86";s:27:"Resources/Public/Js/form.js";s:4:"35ae";s:47:"Resources/Public/Js/jquery.ui.datepicker.min.js";s:4:"1fb7";s:49:"Resources/Public/Js/jquery.validationEngine-en.js";s:4:"a633";s:46:"Resources/Public/Js/jquery.validationEngine.js";s:4:"fbd3";s:41:"Resources/Public/Js/powermail_frontend.js";s:4:"35dd";s:27:"Resources/Public/Js/tabs.js";s:4:"0441";s:45:"Tests/Unit/Controller/FormsControllerTest.php";s:4:"8a96";s:38:"Tests/Unit/Domain/Model/FieldsTest.php";s:4:"33ae";s:37:"Tests/Unit/Domain/Model/FormsTest.php";s:4:"c8e3";s:37:"Tests/Unit/Domain/Model/PagesTest.php";s:4:"4322";s:14:"doc/manual.sxw";s:4:"c2db";s:47:"doc/SpamDetection/powermail_spam_detection.xlsx";s:4:"51b5";s:55:"doc/SpamDetection/powermaill_spam_detection_formula.jpg";s:4:"53fe";}',
);

?>