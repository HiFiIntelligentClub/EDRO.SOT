<?php
//
//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru
//
if(!$objEDRO->arrReality['bIzAndroid']||!$objEDRO->arrReality['bIzApple'])
	{
	}
$strDynascreenStyle='
<style>
	/*EDRO father*/
	body		{font-family:sans-serif;}'.
	'/*Vertical*/
	.V100		{top	: 0px;}
	.V99		{top	: 20px;}
	.V98		{top	: 40px;}
	.V97		{top	: 60px;}
	.V96		{top	: 80px;}
	.V95		{top	: 100px;}
	.V94		{top	: 120px;}

	.V50pc 		{bottom	: 50%;}

	.V8 		{bottom	: 160px;}
	.V7 		{bottom	: 140px;}
	.V6 		{bottom	: 120px;}
	.V5 		{bottom	: 100px;}
	.V4 		{bottom	: 80px;}
	.V3 		{bottom	: 60px;}
	.V2 		{bottom	: 50px;}
	.V1 		{bottom	: 10px;}
	.V0 		{bottom	: 0px;}


	/*Horizontal*/
	.HL0		{left	: 0px;}
	.H035pc		{left	: 35%;}
	.HR0		{right	: 0px;}

	/*//EDRO page elements*/
	.halfLine,		.L0	{height:10px;line-height:10px;font-size:xx-small;}
	.line,			.L1	{height:20px;line-height:19px;font-size:x-small	;}
	.doubleLine,		.L2	{height:40px;line-height:18px;font-size:large	;}
	.doubleLineLargeText,	.L3	{height:40px;line-height:36px;font-size:xx-large;}
	//Dhort long etc...

	/*//EDRO matrix*/

	/*/ Margins /*/
	.ML		{margin-left	: 4px;}
	.ML1		{margin-left	: 4px;}
	.MR		{margin-right	: 4px;}
	.MR1		{margin-right	: 4px;}
	/*/ Margins /*/

	/*EDRO base*/
	window 		{} /*Not configured yet. Will be in a future.*/
	.block,.brick	{display:block; overflow:hidden;}
	.inline		{display:inline-block;overflow:hidden;}
	.hidden		{display:none!important;}
	.transparent	{opacity:0;}
	.rel		{display:block; position:relative;}
	.abs		{display:block; position:absolute;}
	.fix		{display:block; position:fixed;}
	.fixed		{display:block; position:fixed;}
	.left		{float:left;}
	.right		{float:right;}
	.cursor		{cursor:pointer;}
	.scrollerY	{overflow-x:hidden;overflow-y:scroll;}
	.scrollerX	{overflow-y:hidden;overflow-x:scroll;}
	scrollerY	{overflow-x:hidden;overflow-y:scroll;-webkit-overflow-scrolling:touch;}
	scrollerX	{overflow-y:hidden;overflow-x:scroll;-webkit-overflow-scrolling:touch;}
	.scrollerGlide	{-webkit-overflow-scrolling:touch;}
	.border,	.BO	{border:	1px solid #1a1a1a4a;}
	.border-bottom,	.BBV	{border-bottom: 1px solid #1a1a1a4a;}
	.border-top,	.BTA	{border-top: 	1px solid #1a1a1a4a;}
	.border-left,	.BLL	{border-left:	1px solid #e2e2e2;}
	.border-right,	.BRJ	{border-right:	1px solid #e2e2e2;}
	.BRJ2			{border-right:	1px solid #868686;}
	.BLL2			{border-left:	1px solid #868686;}
	.loading		{background-color:grey;color:white}
	paragraph	{display:block;float:left;width:40px;height:10px;}
	.RTL_LTR	{text-align: center;}


	.groundLand	{background-color:rgba(255,255,255,0);}
	.groundFly	{background-color:rgba(255,255,255,0.7);}

					
	.PlayTC1	{color			:#000;}
	.PlayBC1	{background-color	:#FFF;}

	.PlayTC2	{color			:#000;}
	.PlayBC2	{background-color	:yellow;}

	.PlayTC3	{color			:#000;}
	.PlayBC3	{background-color	:#2d90f5;}

	.PlayTC4	{color			:#000;}
	.PlayBC4	{background-color	:#FFF;}

	.BC0	{background-color	:#FFF;}
	.TC1	{color			:#000;}
	.BC1	{background-color	:#F4F4F4;}

	.TC2	{color			:#FFF;}
	.BC2	{background-color	:#575757;}

	.TC3	{color			:#FFF;}
	.BC3	{background-color	:#000;}

	.tcenter	{text-align:center;}
	.tleft		{text-align:right;}
	.tright		{text-align:left;}

	 /*//EDRO base*/

	/*Overlay*/
	.loading overlay{display:block;}
	.loaded overlay {opacity:0!important;visibility:hidden!important;transition: visibility 0s linear 0.9s, opacity 0.9s ease-in-out;}
	/*Overlay*/

	 /*//EDRO sensor*/
	a.sensor				{text-decoration:none;}
	sensorHorizontalRotate 			{overflow-y:hidden;overflow-x:scroll!important;-webkit-overflow-scrolling:touch;user-select:none;-webkit-user-select:none;-ms-user-select:none;cursor:pointer;}
	sensorButton, .sensorButton		{cursor:pointer;}
	sensorHorisontalDisplay			{font-weight:lighter;}
	sensorHorisontalDisplay .selected	{font-weight:normal;color:#000;padding-left:3px;padding-right:3px;}
	 /*//EDRO sensor*/
	/*

	/*EDRO Language*/
	© A.A.CheckMaRev tubmulur@yandex.ru 2020

	MasterMoodSetter: EDRO Language selector. 
	1.Master flag is a mood setter. 
	2.Followers nodes are started with "if" prefix
		after setting Master mood flag,
		followers will form as Master mood setter flag desires.  
	
	Example:
		1. If we set master mood setter flag to EN:
			set MasterMoodSetter="EN";
		   We will get all followers showing only ifEN blocks.
			set MasterMoodSetter=EN,RU
		   We will get all followers showing only ifEN and ifRU blocks forever.
	*//*
	Система расчёта темплейта для 7 языков. Аист.
      ifEN,ifRU,ifFR,ifIT,ifGE,ifBY,ifUA            x7+7
	--------------------------------
	EN|  RU|  FR|  IT|  GE|  BY|  UA|--------=EN  ifEN,
                                                    
        EN|  RU|  FR|  IT|  GE|  BY|  UA|--------=EN   ifRU
                                                    
        EN|  RU|  FR|  IT|  GE|  BY|  UA|--------=EN    ifFR
                                                    
        EN|  RU|  FR|  IT|  GE|  BY|  UA|--------=EN     ifIT
                                                    
        EN|  RU|  FR|  IT|  GE|  BY|  UA|--------=EN      ifGE
                                                    
        EN|  RU|  FR|  IT|  GE|  BY|  UA|--------=EN       ifBY
                                                    
        EN|  RU|  FR|  IT|  GE|  BY|  UA|--------=EN        ifUA
	-------------------------------- 
				    	*/
	body.EN ifEN{display:block;}
	body.EN ifRU{display:none;}
	body.EN ifFR{display:none;}
	body.EN ifIT{display:none;}
	body.EN ifGE{display:none;}
	body.EN ifBY{display:none;}
	body.EN ifUA{display:none;}

	body.RU ifEN{display:none;}
	body.RU ifRU{display:block;}
	body.RU ifFR{display:none;}
	body.RU ifIT{display:none;}
	body.RU ifGE{display:none;}
	body.RU ifBY{display:none;}
	body.RU ifUA{display:none;}

	body.FR ifEN{display:none;}
	body.FR ifRU{display:none;}
	body.FR ifFR{display:block;}
	body.FR ifIT{display:none;}
	body.FR ifGE{display:none;}
	body.FR ifBY{display:none;}
	body.FR ifUA{display:none;}

	body.BY ifEN{display:none;}
	body.BY ifRU{display:none;}
	body.BY ifFR{display:none;}
	body.BY ifIT{display:block;}
	body.BY ifGE{display:none;}
	body.BY ifBY{display:none;}
	body.BY ifUA{display:none;}

	body.IT ifEN{display:none;}
	body.IT ifRU{display:none;}
	body.IT ifFR{display:none;}
	body.IT ifIT{display:none;}
	body.IT ifGE{display:block;}
	body.IT ifBY{display:none;}
	body.IT ifUA{display:none;}

	body.GE ifEN{display:none;}
	body.GE ifRU{display:none;}
	body.GE ifFR{display:none;}
	body.GE ifIT{display:none;}
	body.GE ifGE{display:none;}
	body.GE ifBY{display:block;}
	body.GE ifUA{display:none;}

	body.UA ifEN{display:none;}
	body.UA ifRU{display:none;}
	body.UA ifFR{display:none;}
	body.UA ifIT{display:none;}
	body.UA ifGE{display:none;}
	body.UA ifBY{display:none;}
	body.UA ifUA{display:block;}

	/*© A.A.CheckMaRev tubmulur@yandex.ru*/
	/*EDRO Language*/

	/*EDRO layers*/
	.layer_1,		layer_10	{z-index:1;}
	.layer_1_1,		layer_11	{z-index:2;}
	.layer_1_2,		layer_12	{z-index:3;}
	.layer_1_3,		layer_13	{z-index:4;}
	.layer_1_4,		layer_14	{z-index:5;}

	.layer_2,		layer_20	{z-index:20;}
	.layer_2_1,		layer_21	{z-index:21;}
	.layer_2_2,		layer_22	{z-index:22;}
	.layer_2_3,		layer_23	{z-index:23;}
	.layer_2_4,		layer_24	{z-index:24;}

	.layer_3,		layer_31	{z-index:30;}
	.layer_3_1,		layer_32	{z-index:31;}
	.layer_3_2,		layer_33	{z-index:32;}
	.layer_3_3,		layer_34	{z-index:33;}
	.layer_3_4,		layer_35	{z-index:34;}

	.layer_4,		layer_40	{z-index:40;}
	.layer_4_1,		layer_41	{z-index:41;}
	.layer_4_2,		layer_42	{z-index:42;}
	.layer_4_3,		layer_43	{z-index:43;}
	.layer_4_4,		layer_44	{z-index:44;}

	.layer_5,		layer_50	{z-index:50;}
	.layer_5_Membrane,	layer_51	{z-index:51;}
	.layer_5_Overlay,	layer_52	{z-index:52;}
	.layer_5_Debug,		layer_53	{z-index:53;}
	.layer_5_Nav,		layer_54	{z-index:54;}

	.layer_6_LoginReg,	layer_60	{z-index:60;}
	.layer_6,		layer_61	{z-index:61;}
	.layer_6_1,		layer_62	{z-index:62;}
	.layer_6_2,		layer_63	{z-index:63;}
	/*//EDRO layers*/

	/*//EDRO touch*/
	sensor.small{width:60px;height:60px;user-select:none;-webkit-user-select:none;-ms-user-select:none;}
	.sensor{cursor:pointer;user-select:none;-webkit-user-select:none;-ms-user-select:none;};
	.touch-active:hover{border-color:green!important;}
	.touch-active:active{border-color:red!important;}
	.no-select{user-select:none;-webkit-user-select:none;-ms-user-select:none;}
	/*//EDRO touch*/

	/*/ EDRO Station FollowingDj*/
	HiFi.NoFollowingDj 	ifNoFollowingDj		{display:block;}
	HiFi.FollowingDj 	ifFollowingDj		{display:none;}
	HiFi.FollowingDj 	ifNoFollowingDj		{display:none;}
	HiFi.NoFollowingDj 	ifFollowingDj		{display:none;}
	/*/ EDRO Station FollowingDj*/

	/*/ Master mood setter HficMenu setup definitions [EDRO]. 
            Setted master mood acronim: "SMM". 
	    Master Object: "MO".
	    Example: Setted master mood="CutDown", so SMM->CutDown
	    Sensitive folowers: "F"*/
	/*MO----. SMM->-. .----F*/
	/*	V	V V	*/
	 HficSearch.CutDown ifCutDown,  HficSearch.default ifCutDown	/*Default  is CutDown*/
						{width:20px;display:block;} 

	 HficSearch.CutDown ifExpanded,  HficSearch.default ifExpanded	/*Default  is CutDown*/
						{display	: none;!important;width:100%;} 

	 HficSearch.Expanded ifExpanded		{display	: block;}

	 HficSearch.Expanded ifCutDown		{display	: none;}

	/*/ EDRO Station Search expanded*/

	 /*/ EDRO Station */
	/*station:hover {background: linear-gradient(0deg,rgba(256,256,256,0.8) ,rgba(190,190,190,0.8))!important;}
	station:actve {background: linear-gradient(0deg,rgba(256,256,256,0.8) ,rgba(190,190,190,0.8))!important;}
	station:focus {background: linear-gradient(0deg,rgba(256,256,256,0.8) ,rgba(190,190,190,0.8))!important;}
	\ */            /*/
	/*/ EDRO Station*/

	/*EDRO player*/
	/*/EDRO.Author.table*/
	/*/EDRO.Author.table*/
	audioTrack 		{border-top		: 1px solid #aaa;border-bottom: 1px solid #aaa;}
	audioTrack:hover 	{background-color	: #ccc;}
	/*EDRO player*/

	/*EDRO station switch*/
	station player:hover
		{
		color			: #000!important;
		background-color	: #ccc;
		}

	station.playing 				ifReady,
	station.loadingAudio 				ifReady,
	station.errorAudio 				ifReady
		{
		display				: none!important;
		}

	playerControlAlwaysVisible.playing 		ifPlaying,
	station.playing 				ifPlaying,
	station.loadingAudio 				ifLoadingAudio,
	playerControlAlwaysVisible.loadingAudio 	ifLoadingAudio
		{
		display				: block!important;
		}

	playerControlAlwaysVisible.stopped 		ifStopped
		{
		display				: block!important;
		}

	playerControlAlwaysVisible.overload 		ifOverload,
	station.overload ifOverload
		{
		display				: block!important;
		}

	playerControlAlwaysVisible.errorAudio 		ifNoConnection,
	station.errorAudio ifNoConnection
		{
		display				: block!important;
		}
	/*EDRO station switch*/

	/*EDRO station switch colors*/
	playerControlAlwaysVisible.playing,
	station.playing
		{
		/*border			: 1px solid #6fff6f!important;*/
		/*background-color		: #1e3d5d!important;*/
		/*background			: linear-gradient(0deg,rgba(256,256,256,0.8) ,rgba(190,190,190,0.8))!important;*/
		}
	playerControlAlwaysVisible.loadingAudio,
	station.loadingAudio
		{
		/*border			: 1px solid yellow!important;*/
		/*background-color		: yellow!important;*/
		}
	station.WaitingAudio	recordLabel
		{
		background-color		: #2d90f5!important;
    		color				: white!important;
		}
	playerControlAlwaysVisible.errorAudio,
	station.errorAudio
		{
		/*border			: 1px solid #ecc1be!important;*/
		background-color		: #ecc1be!important;
		}
	/*EDRO station switch colors*/

	/*EDRO station switch header colors*/
	station.playing 	h2
		{
		color				: #062b88!important;
		}
	station.loadingAudio 	h2
		{
		color				: yellow!important;
		}
	station.errorAudio 	h2
		{
		color				: red!important;
		}
	/*EDRO station switch header colors*/

	/*EDRO station switch event indicator*/
	station.playing		h2
		{
		color				: #062b88;
		}
	station.playing 	whiteblock
		{
		background-color		: #6fb6ff!important;
		animation-name			: Blink-play;
		animation-duration		: 1s;
		/* animation-timing-function	: easy; */
		animation-delay			: 0s;
		animation-iteration-count	: infinite;
		animation-direction		: normal;
		animation-fill-mode		: none;
		animation-play-state		: running;
		}
	station.loadingAudio 				whiteblock
		{
		background-color		: yellow!important;
		animation-name			: Blink1;
		animation-duration		: 1s;
		/* animation-timing-function: easy; */
		animation-delay			: 0s;
		animation-iteration-count	: infinite;
		animation-direction		: normal;
		animation-fill-mode		: none;
		animation-play-state		: running;
		}
	station.errorAudio 				whiteblock
		{
		background-color		: #ecc1be!important;
		}
	/*EDRO station switch event indicator*/
	/*//EDRO station*/

	/*// EDRO.Objects */
	article{padding				: 0 0 0 0;}
	/*// EDRO.Objects */

	/*// EDRO.Mobile compatibility */
	@media screen and (max-width:1200px)
		{
		dynablock a
			{
			width		: 48%;
			height		: 100px;
			margin		: 1px;
			}
		dynablock overlay
			{
			line-height	:100px;
			}
		}
	@media screen and (min-width:1200px)
		{
		dynablock a
			{
			width		: 24%;
			height		: 200px;
			margin		: 3px;
			}
		dynablock overlay
			{
			line-height	: 200px;
			}
		}
	/*// EDRO.Mobile compatibility */

	/*// EDRO.Animation */
	.blink
		{
		animation-name		: Blink1;
		animation-duration	: 4s;
		/*animation-timing-function: easy;*/
		animation-delay		: 0s;
		animation-iteration-count: infinite;
		animation-direction	: normal;
		animation-fill-mode	: none;
		animation-play-state	: running;
		}
	.blink-fast
		{
		animation-name		: Blink-fast;
		animation-duration	: 1s;
		/*animation-timing-function: easy;*/
		animation-delay		: 0s;
		animation-iteration-count: infinite;
		animation-direction	: normal;
		animation-fill-mode	: none;
		animation-play-state	: running;
		}
	.blink-fast1
		{
		animation-name		: Blink-fast;
		animation-duration	: 1.6s;
		/*animation-timing-function: easy;*/
		animation-delay		: 0.3s;
		animation-iteration-count: infinite;
		animation-direction	: normal;
		animation-fill-mode	: none;
		animation-play-state	: running;
		}
	.blink-fast2
		{
		animation-name		: Blink-fast;
		animation-duration	: 1.4s;
		/*animation-timing-function: easy;*/
		animation-delay		: 0.6s;
		animation-iteration-count: infinite;
		animation-direction	: normal;
		animation-fill-mode	: none;
		animation-play-state	: running;
		}
	.blink-fast3
		{
		animation-name		: Blink-fast;
		animation-duration	: 1.3s;
		/*animation-timing-function: easy;*/
		animation-delay		: 0.8s;
		animation-iteration-count: infinite;
		animation-direction	: normal;
		animation-fill-mode	: none;
		animation-play-state	: running;
		}
	.blink-fast4
		{
		animation-name		: Blink-fast;
		animation-duration	: 1.2s;
		/*animation-timing-function: easy;*/
		animation-delay		: 0.1s;
		animation-iteration-count: infinite;
		animation-direction	: normal;
		animation-fill-mode	: none;
		animation-play-state	: running;
		}
	.blink-fast5
		{
		animation-name		: Blink-fast;
		animation-duration	: 1.1s;
		/*animation-timing-function: easy;*/
		animation-delay		: 0.0s;
		animation-iteration-count: infinite;
		animation-direction	: normal;
		animation-fill-mode	: none;
		animation-play-state	: running;
		}

	.blink-fast6
		{
		animation-name		: Blink-fast;
		animation-duration	: 1.5s;
		/*animation-timing-function: easy;*/
		animation-delay		: 1.2s;
		animation-iteration-count: infinite;
		animation-direction	: normal;
		animation-fill-mode	: none;
		animation-play-state	: running;
		}
	playerControlAlwaysVisible.WaitingAudio ifLoadingAudio#objLoadingAudioTopSmall, 
	playerControlAlwaysVisible.WaitingAudio ifPlaying#objPlayingAudioTopSmall, 
	.blink-medium
		{
		animation-name		: Blink-medium;
		animation-duration	: 2s;
		/*animation-timing-function: easy;*/
		animation-delay		: 0s;
		animation-iteration-count: infinite;
		animation-direction	: normal;
		animation-fill-mode	: none;
		animation-play-state	: running;
		}
	playerControlAlwaysVisible.WaitingAudio ifLoadingAudio PlayerLoadingButton, 
	playerControlAlwaysVisible.WaitingAudio ifPlaying PlayerPlayingButton, 
	station.WaitingAudio.LoadingAudio	recordLabel,
	station.WaitingAudio	recordLabel,
	.blink-slow
		{
		animation-name		: Blink-slow;
		animation-duration	: 4s;
		/*animation-timing-function: easy;*/
		animation-delay		: 0s;
		animation-iteration-count: infinite;
		animation-direction	: normal;
		animation-fill-mode	: none;
		animation-play-state	: running;
		}
	@keyframes Blink1
		{
		0% {
		    opacity:1;
		    }
		100% {
		    opacity:0;
		    }
		}
	@keyframes Blink-slow
		{
		0% {
		    opacity:0;
		    }
		33% {
		    opacity:1;
		    }
		
		66% {
		    opacity:1;
		    }
		
		100% {
		    opacity:1;
		    }
		}
	@keyframes Blink-medium
		{
		0% {
		    opacity:0;
		    }
		4% {
		    opacity:1;
		    }
		
		66% {
		    opacity:1;
		    }
		
		100% {
		    opacity:1;
		    }
		}
	@keyframes Blink-fast
		{
		0% {
		    opacity:1;
		    }
		20% {
		    opacity:0;
		    }
		40% {
		    opacity:1;
		    }
		60% {
		    opacity:0;
		    }
		80% {
		    opacity:1;
		    }
		100% {
		    opacity:0;
		    }

		}
	@keyframes Blink-play
		{
		0% {
		    opacity:1;
		    }
		20% {
		    opacity:1;
		    }
		40% {
		    opacity:1;
		    }
		60% {
		    opacity:1;
		    }
		99% {
		    opacity:1;
		    }
		100% {
		    opacity:0;
		    }

		}
	@keyframes hideElement
		{
		0% {
		    opacity:1;
		    }
		100% {
		    opacity:0;
		    }
		}
	/*// EDRO.Animation */

	/*// EDRO.Adaptive */
	/*@media (orientation: landscape)
		{
		body
			{
			overflow	: hidden;
			height		: 72vh!important;
			}
		}*/
	/*// EDRO.Adaptive */

</style>
';
?>