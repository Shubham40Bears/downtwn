<!doctype html>
<html class="js" lang="en">
  <head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
  window.addEventListener('gokwikLoaded', e => {

   $('.gokwik-checkout button').prop('disabled', false);
              $('.gokwik-checkout button').removeClass('disabled');
         $('#gokwik-buy-now').prop('disabled', false);
              $('#gokwik-buy-now').removeClass('disabled');

  const targetElement = document.querySelector("body");
  function debounce(func, delay) {
    let timeoutId;
    return function () {
      const context = this;
      const args = arguments;
      clearTimeout(timeoutId);
      timeoutId = setTimeout(function () {
        func.apply(context, args);
      }, delay);
    };
  }
  const observer = new MutationObserver(() => {
 const homeSelector = document.querySelector('.quick-buy-modal #gokwik-buy-now');
    if(homeSelector){
    homeSelector.classList.remove("disabled");
    homeSelector.removeAttribute("disabled");
    }
    debouncedMyTimer();
  });
  const debouncedMyTimer = debounce(() => {
    observer.disconnect();
    enableGokwikCart();
    observer.observe(targetElement, { childList: true, subtree: true });
  }, 700);
  function enableGokwikCart() {
      $('.gokwik-checkout button').prop('disabled', false);
              $('.gokwik-checkout button').removeClass('disabled');

  }
  const config = { childList: true, subtree: true };
  observer.observe(targetElement, config);
});
</script>

<style>

.gokwik-checkout {
  width: 100%;
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: end;
  margin-bottom: 10px;
}
.gokwik-checkout button {
  max-width:100%;
  width: 100%;
  border: none;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #121212;
  position: relative;
  margin: 0;
cursor: pointer;
  padding: 5px 10px;
  height:45px;
}
#gokwik-buy-now.disabled, .gokwik-disabled{
  opacity:0.5;
  cursor: not-allowed;
  }
  .gokwik-checkout button:focus {
  outline: none;
}
.gokwik-checkout button > span {
  display: flex;
}
.gokwik-checkout button > span.btn-text {
  display: flex;
  flex-direction: column;
  color: #ffffff;
  align-items: flex-start;
}
.gokwik-checkout button > span.btn-text > span:last-child {
	padding-top: 2px;
    font-size: 10px;
    line-height: 10px;
    text-transform: initial;
}
.gokwik-checkout button > span.btn-text > span:first-child {
   font-size: 13px;
}
.gokwik-checkout button > span.pay-opt-icon img:first-child {
  margin-right: 10px;
  margin-left: 10px;
}
/*   Additional */
.gokwik-checkout button.disabled{
  opacity:0.5;
  cursor: not-allowed;
  }
.gokwik-checkout button.disabled .addloadr#btn-loader{
   display: flex!important;
}
  #gokwik-buy-now.disabled .addloadr#btn-loader{
   display: flex!important;
}
    #gokwik-buy-now:disabled{
   cursor: not-allowed;
}





 

  

/* Loader CSS */
  #btn-loader{
    display: none;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    justify-content: center;
    align-items: center;
    background:#121212;
    border-radius:10px;
    
  } 

.cir-loader,
.cir-loader:after {
  border-radius: 50%;
  width: 35px;
  height: 35px;
}
.cir-loader {
  margin: 6px auto;
  font-size: 10px;
  position: relative;
  text-indent: -9999em;
  border-top: 0.5em solid rgba(255, 255, 255, 0.2);
  border-right: 0.5em solid rgba(255, 255, 255, 0.2);
  border-bottom: 0.5em solid rgba(255, 255, 255, 0.2);
  border-left: 0.5em solid #ffffff;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-animation: load8 1.1s infinite linear;
  animation: load8 1.1s infinite linear;
}
@-webkit-keyframes load8 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes load8 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
</style> 


    <!-- Gokwik theme code End -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#f6f6f6">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <link rel="canonical" href="https://wtflex.in/">
    <link href="https://api.fontshare.com/v2/css?f[]=excon@400,500,700,900&display=swap" rel="stylesheet"><link rel="icon" type="image/png" href="//wtflex.in/cdn/shop/files/logo_wtf.png?crop=center&height=32&v=1655663734&width=32"><link rel="preconnect" href="https://fonts.shopifycdn.com" crossorigin><title>
      Buy Streetwear Clothing Online
 &ndash; WHAT THE FLEX</title>

    
      <meta name="description" content="Shop oversized t-shirts, bowling shirts, cargo pants, varsity jackets, and more at budget friendly prices. We offer aesthetic, stylish and modern clothing essentials with flattering fits and premium quality fabrics. Perfect for events, weekends, nights out, or any occasion. Elevate your streetwear game today.">
    

    

<meta property="og:site_name" content="WHAT THE FLEX">
<meta property="og:url" content="https://wtflex.in/">
<meta property="og:title" content="Buy Streetwear Clothing Online">
<meta property="og:type" content="website">
<meta property="og:description" content="Shop oversized t-shirts, bowling shirts, cargo pants, varsity jackets, and more at budget friendly prices. We offer aesthetic, stylish and modern clothing essentials with flattering fits and premium quality fabrics. Perfect for events, weekends, nights out, or any occasion. Elevate your streetwear game today."><meta property="og:image" content="http://wtflex.in/cdn/shop/files/logo_wtf.png?height=628&pad_color=ffffff&v=1655663734&width=1200">
  <meta property="og:image:secure_url" content="https://wtflex.in/cdn/shop/files/logo_wtf.png?height=628&pad_color=ffffff&v=1655663734&width=1200">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="628"><meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Buy Streetwear Clothing Online">
<meta name="twitter:description" content="Shop oversized t-shirts, bowling shirts, cargo pants, varsity jackets, and more at budget friendly prices. We offer aesthetic, stylish and modern clothing essentials with flattering fits and premium quality fabrics. Perfect for events, weekends, nights out, or any occasion. Elevate your streetwear game today.">


    <script src="//wtflex.in/cdn/shop/t/81/assets/constants.js?v=132983761750457495441730879288" defer="defer"></script>
    <script src="//wtflex.in/cdn/shop/t/81/assets/pubsub.js?v=158357773527763999511730879288" defer="defer"></script>
    <script src="//wtflex.in/cdn/shop/t/81/assets/global.js?v=180281095827353279931730879474" defer="defer"></script>
    <script src="//wtflex.in/cdn/shop/t/81/assets/details-disclosure.js?v=13653116266235556501730879288" defer="defer"></script>
    <script src="//wtflex.in/cdn/shop/t/81/assets/details-modal.js?v=25581673532751508451730879288" defer="defer"></script>
    <script src="//wtflex.in/cdn/shop/t/81/assets/search-form.js?v=133129549252120666541730879288" defer="defer"></script><script src="//wtflex.in/cdn/shop/t/81/assets/animations.js?v=88693664871331136111730879288" defer="defer"></script><script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');</script><meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/61545513126/digital_wallets/dialog">
<script async="async" src="/checkouts/internal/preloads.js?locale=en-IN"></script>
<script id="__st">var __st={"a":61545513126,"offset":19800,"reqid":"c36bb901-56fa-4848-b28a-0c6062226d1f-1738850173","pageurl":"wtflex.in\/","u":"6e860aeaefca","p":"home"};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script id="form-persister">!function(){'use strict';const t='contact',e='new_comment',n=[[t,t],['blogs',e],['comments',e],[t,'customer']],o='password',r='form_key',c=['recaptcha-v3-token','g-recaptcha-response','h-captcha-response',o],s=()=>{try{return window.sessionStorage}catch{return}},i='__shopify_v',u=t=>t.elements[r],a=function(){const t=[...n].map((([t,e])=>`form[action*='/${t}']:not([data-nocaptcha='true']) input[name='form_type'][value='${e}']`)).join(',');var e;return e=t,()=>e?[...document.querySelectorAll(e)].map((t=>t.form)):[]}();function m(t){const e=u(t);a().includes(t)&&(!e||!e.value)&&function(t){try{if(!s())return;!function(t){const e=s();if(!e)return;const n=u(t);if(!n)return;const o=n.value;o&&e.removeItem(o)}(t);const e=Array.from(Array(32),(()=>Math.random().toString(36)[2])).join('');!function(t,e){u(t)||t.append(Object.assign(document.createElement('input'),{type:'hidden',name:r})),t.elements[r].value=e}(t,e),function(t,e){const n=s();if(!n)return;const r=[...t.querySelectorAll(`input[type='${o}']`)].map((({name:t})=>t)),u=[...c,...r],a={};for(const[o,c]of new FormData(t).entries())u.includes(o)||(a[o]=c);n.setItem(e,JSON.stringify({[i]:1,action:t.action,data:a}))}(t,e)}catch(e){console.error('failed to persist form',e)}}(t)}const f=t=>{if('true'===t.dataset.persistBound)return;const e=function(t,e){const n=function(t){return'function'==typeof t.submit?t.submit:HTMLFormElement.prototype.submit}(t).bind(t);return function(){let t;return()=>{t||(t=!0,(()=>{try{e(),n()}catch(t){(t=>{console.error('form submit failed',t)})(t)}})(),setTimeout((()=>t=!1),250))}}()}(t,(()=>{m(t)}));!function(t,e){if('function'==typeof t.submit&&'function'==typeof e)try{t.submit=e}catch{}}(t,e),t.addEventListener('submit',(t=>{t.preventDefault(),e()})),t.dataset.persistBound='true'};!function(){function t(t){const e=(t=>{const e=t.target;return e instanceof HTMLFormElement?e:e&&e.form})(t);e&&m(e)}document.addEventListener('submit',t),document.addEventListener('DOMContentLoaded',(()=>{const e=a();for(const t of e)f(t);var n;n=document.body,new window.MutationObserver((t=>{for(const e of t)if('childList'===e.type&&e.addedNodes.length)for(const t of e.addedNodes)1===t.nodeType&&'FORM'===t.tagName&&a().includes(t)&&f(t)})).observe(n,{childList:!0,subtree:!0,attributes:!1}),document.removeEventListener('submit',t)}))}()}();</script>
<script integrity="sha256-EGCDRYTvIEOXsReXgqGwkAR+5Dl8tickSrieA/ZcQwc=" data-source-attribution="shopify.loadfeatures" defer="defer" src="//wtflex.in/cdn/shopifycloud/shopify/assets/storefront/load_feature-1060834584ef204397b1179782a1b090047ee4397cb627244ab89e03f65c4307.js" crossorigin="anonymous"></script>
<script data-source-attribution="shopify.dynamic_checkout.dynamic.init">var Shopify=Shopify||{};Shopify.PaymentButton=Shopify.PaymentButton||{isStorefrontPortableWallets:!0,init:function(){window.Shopify.PaymentButton.init=function(){};var t=document.createElement("script");t.src="https://wtflex.in/cdn/shopifycloud/portable-wallets/latest/portable-wallets.en.js",t.type="module",document.head.appendChild(t)}};
</script>
<script data-source-attribution="shopify.dynamic_checkout.buyer_consent">
  function portableWalletsHideBuyerConsent(e){var t=document.getElementById("shopify-buyer-consent"),n=document.getElementById("shopify-subscription-policy-button");t&&n&&(t.classList.add("hidden"),t.setAttribute("aria-hidden","true"),n.removeEventListener("click",e))}function portableWalletsShowBuyerConsent(e){var t=document.getElementById("shopify-buyer-consent"),n=document.getElementById("shopify-subscription-policy-button");t&&n&&(t.classList.remove("hidden"),t.removeAttribute("aria-hidden"),n.addEventListener("click",e))}window.Shopify?.PaymentButton&&(window.Shopify.PaymentButton.hideBuyerConsent=portableWalletsHideBuyerConsent,window.Shopify.PaymentButton.showBuyerConsent=portableWalletsShowBuyerConsent);
</script>
<script data-source-attribution="shopify.dynamic_checkout.cart.bootstrap">document.addEventListener("DOMContentLoaded",(function(){function t(){return document.querySelector("shopify-accelerated-checkout-cart, shopify-accelerated-checkout")}if(t())Shopify.PaymentButton.init();else{new MutationObserver((function(e,n){t()&&(Shopify.PaymentButton.init(),n.disconnect())})).observe(document.body,{childList:!0,subtree:!0})}}));
</script>
<link rel="stylesheet" media="screen" href="//wtflex.in/cdn/shop/t/81/compiled_assets/styles.css?6660">
<script id="sections-script" data-sections="circle-categories,header" defer="defer" src="//wtflex.in/cdn/shop/t/81/compiled_assets/scripts.js?6660"></script>


    <style data-shopify>
      @font-face {
  font-family: Helvetica;
  font-weight: 400;
  font-style: normal;
  font-display: swap;
  src: url("//wtflex.in/cdn/fonts/helvetica/helvetica_n4.fe093fe9ca22a15354813c912484945a36b79146.woff2?h1=d2hhdC10aGUtZmxleC5hY2NvdW50Lm15c2hvcGlmeS5jb20&h2=d3RmbGV4Lmlu&hmac=0a21ae640e38a8fe415a31e66f68a6ed602bf558ecdd3e6c07d7e365b94fbef6") format("woff2"),
       url("//wtflex.in/cdn/fonts/helvetica/helvetica_n4.8bddb85c18a0094c427a9bf65dee963ad88de4e8.woff?h1=d2hhdC10aGUtZmxleC5hY2NvdW50Lm15c2hvcGlmeS5jb20&h2=d3RmbGV4Lmlu&hmac=33241fb07f9f71ff50e31fa595ae93e034de826c52561679f550e835abeb1ebb") format("woff");
}

      @font-face {
  font-family: Helvetica;
  font-weight: 700;
  font-style: normal;
  font-display: swap;
  src: url("//wtflex.in/cdn/fonts/helvetica/helvetica_n7.39bee04bd277a9c4e94e2fd42d53f4e3c0afb8a5.woff2?h1=d2hhdC10aGUtZmxleC5hY2NvdW50Lm15c2hvcGlmeS5jb20&h2=d3RmbGV4Lmlu&hmac=52102fb6f9b8dc4a2ba1026f0b4944e3f44099a13e3bb6ac7099d1fc9d9fe04d") format("woff2"),
       url("//wtflex.in/cdn/fonts/helvetica/helvetica_n7.b95359461a6788d5549e702cb2123bc40c227e49.woff?h1=d2hhdC10aGUtZmxleC5hY2NvdW50Lm15c2hvcGlmeS5jb20&h2=d3RmbGV4Lmlu&hmac=af518f78fb5d7f6ed49bc6c3b284e24253631c5e03ab26310e2b8596aea71b36") format("woff");
}

      @font-face {
  font-family: Helvetica;
  font-weight: 400;
  font-style: oblique;
  font-display: swap;
  src: url("//wtflex.in/cdn/fonts/helvetica/helvetica_o4.f9832a0fc1ee8fc5a359636e410d6941e1e4ca03.woff2?h1=d2hhdC10aGUtZmxleC5hY2NvdW50Lm15c2hvcGlmeS5jb20&h2=d3RmbGV4Lmlu&hmac=b2466982276cfe91e5adac9262a6673aca7774e88697f91a6819dcd87905e3ed") format("woff2"),
       url("//wtflex.in/cdn/fonts/helvetica/helvetica_o4.0063286aec443697ebae04eeb9c78b820f9f7805.woff?h1=d2hhdC10aGUtZmxleC5hY2NvdW50Lm15c2hvcGlmeS5jb20&h2=d3RmbGV4Lmlu&hmac=b173d250067871f3687d548b86056b6bbf1d24db293736fa700915b705eb52ff") format("woff");
}

      @font-face {
  font-family: Helvetica;
  font-weight: 700;
  font-style: oblique;
  font-display: swap;
  src: url("//wtflex.in/cdn/fonts/helvetica/helvetica_o7.215fd4ca1a06214fa01e44328a1992c977700ea2.woff2?h1=d2hhdC10aGUtZmxleC5hY2NvdW50Lm15c2hvcGlmeS5jb20&h2=d3RmbGV4Lmlu&hmac=894461eaf117be9d91d4cf8430ca6ac3298e16ff1627b8ad76773b04da7fa6af") format("woff2"),
       url("//wtflex.in/cdn/fonts/helvetica/helvetica_o7.b0a2026ae2aa64d060f9ce0ee1b3c3c1aa21bf88.woff?h1=d2hhdC10aGUtZmxleC5hY2NvdW50Lm15c2hvcGlmeS5jb20&h2=d3RmbGV4Lmlu&hmac=ca6098da648633ba294d8d154c3e43dc46490e9c8ae35bd48bd23954c9ffb58d") format("woff");
}

      @font-face {
  font-family: Righteous;
  font-weight: 400;
  font-style: normal;
  font-display: swap;
  src: url("//wtflex.in/cdn/fonts/righteous/righteous_n4.ae12f723ca3ef357f8426575ae5515969ffe8b06.woff2?h1=d2hhdC10aGUtZmxleC5hY2NvdW50Lm15c2hvcGlmeS5jb20&h2=d3RmbGV4Lmlu&hmac=144cec91a45600a48daff276b95a4aa42290825480f569e381d0a3b4e3572421") format("woff2"),
       url("//wtflex.in/cdn/fonts/righteous/righteous_n4.7aa6adcc7bf30be1c2818f73fafed582b16ac212.woff?h1=d2hhdC10aGUtZmxleC5hY2NvdW50Lm15c2hvcGlmeS5jb20&h2=d3RmbGV4Lmlu&hmac=77bea92e139e1e9a59d1085caffd4196b53a081d9958cc2635b1e2d76dd8fe5c") format("woff");
}


      
        :root,
        .color-scheme-1 {
          --color-background: 246,246,246;
        
          --gradient-background: #f6f6f6;
        

        

        --color-foreground: 18,18,18;
        --color-background-contrast: 182,182,182;
        --color-shadow: 18,18,18;
        --color-button: 18,18,18;
        --color-button-text: 246,246,246;
        --color-secondary-button: 246,246,246;
        --color-secondary-button-text: 18,18,18;
        --color-link: 18,18,18;
        --color-badge-foreground: 18,18,18;
        --color-badge-background: 246,246,246;
        --color-badge-border: 18,18,18;
        --payment-terms-background-color: rgb(246 246 246);
      }
      
        
        .color-scheme-2 {
          --color-background: 246,246,246;
        
          --gradient-background: #f6f6f6;
        

        

        --color-foreground: 18,18,18;
        --color-background-contrast: 182,182,182;
        --color-shadow: 18,18,18;
        --color-button: 18,18,18;
        --color-button-text: 246,246,246;
        --color-secondary-button: 246,246,246;
        --color-secondary-button-text: 18,18,18;
        --color-link: 18,18,18;
        --color-badge-foreground: 18,18,18;
        --color-badge-background: 246,246,246;
        --color-badge-border: 18,18,18;
        --payment-terms-background-color: rgb(246 246 246);
      }
      
        
        .color-scheme-3 {
          --color-background: 36,40,51;
        
          --gradient-background: #242833;
        

        

        --color-foreground: 255,255,255;
        --color-background-contrast: 47,52,66;
        --color-shadow: 18,18,18;
        --color-button: 255,255,255;
        --color-button-text: 0,0,0;
        --color-secondary-button: 36,40,51;
        --color-secondary-button-text: 255,255,255;
        --color-link: 255,255,255;
        --color-badge-foreground: 255,255,255;
        --color-badge-background: 36,40,51;
        --color-badge-border: 255,255,255;
        --payment-terms-background-color: rgb(36 40 51);
      }
      
        
        .color-scheme-4 {
          --color-background: 18,18,18;
        
          --gradient-background: #121212;
        

        

        --color-foreground: 255,255,255;
        --color-background-contrast: 146,146,146;
        --color-shadow: 18,18,18;
        --color-button: 255,255,255;
        --color-button-text: 18,18,18;
        --color-secondary-button: 18,18,18;
        --color-secondary-button-text: 255,255,255;
        --color-link: 255,255,255;
        --color-badge-foreground: 255,255,255;
        --color-badge-background: 18,18,18;
        --color-badge-border: 255,255,255;
        --payment-terms-background-color: rgb(18 18 18);
      }
      
        
        .color-scheme-5 {
          --color-background: 51,79,180;
        
          --gradient-background: #334fb4;
        

        

        --color-foreground: 255,255,255;
        --color-background-contrast: 23,35,81;
        --color-shadow: 18,18,18;
        --color-button: 255,255,255;
        --color-button-text: 51,79,180;
        --color-secondary-button: 51,79,180;
        --color-secondary-button-text: 255,255,255;
        --color-link: 255,255,255;
        --color-badge-foreground: 255,255,255;
        --color-badge-background: 51,79,180;
        --color-badge-border: 255,255,255;
        --payment-terms-background-color: rgb(51 79 180);
      }
      

      body, .color-scheme-1, .color-scheme-2, .color-scheme-3, .color-scheme-4, .color-scheme-5 {
        color: rgba(var(--color-foreground), 0.75);
        background-color: rgb(var(--color-background));
      }

      :root {
        --font-body-family: Helvetica, 'Helvetica Neue', Arial, 'Lucida Grande', sans-serif;
        --font-body-style: normal;
        --font-body-weight: 400;
        --font-body-weight-bold: 700;

        --font-heading-family: Righteous, sans-serif;
        --font-heading-style: normal;
        --font-heading-weight: 400;

        --font-body-scale: 1.0;
        --font-heading-scale: 1.0;

        --media-padding: px;
        --media-border-opacity: 0.05;
        --media-border-width: 1px;
        --media-radius: 2px;
        --media-shadow-opacity: 0.0;
        --media-shadow-horizontal-offset: 0px;
        --media-shadow-vertical-offset: 4px;
        --media-shadow-blur-radius: 5px;
        --media-shadow-visible: 0;

        --page-width: 160rem;
        --page-width-margin: 0rem;

        --product-card-image-padding: 0.0rem;
        --product-card-corner-radius: 0.4rem;
        --product-card-text-alignment: left;
        --product-card-border-width: 0.0rem;
        --product-card-border-opacity: 0.1;
        --product-card-shadow-opacity: 0.0;
        --product-card-shadow-visible: 0;
        --product-card-shadow-horizontal-offset: 0.0rem;
        --product-card-shadow-vertical-offset: 0.4rem;
        --product-card-shadow-blur-radius: 0.5rem;

        --collection-card-image-padding: 0.0rem;
        --collection-card-corner-radius: 0.4rem;
        --collection-card-text-alignment: left;
        --collection-card-border-width: 0.0rem;
        --collection-card-border-opacity: 0.1;
        --collection-card-shadow-opacity: 0.0;
        --collection-card-shadow-visible: 0;
        --collection-card-shadow-horizontal-offset: 0.0rem;
        --collection-card-shadow-vertical-offset: 0.4rem;
        --collection-card-shadow-blur-radius: 0.5rem;

        --blog-card-image-padding: 0.0rem;
        --blog-card-corner-radius: 0.4rem;
        --blog-card-text-alignment: left;
        --blog-card-border-width: 0.0rem;
        --blog-card-border-opacity: 0.1;
        --blog-card-shadow-opacity: 0.0;
        --blog-card-shadow-visible: 0;
        --blog-card-shadow-horizontal-offset: 0.0rem;
        --blog-card-shadow-vertical-offset: 0.4rem;
        --blog-card-shadow-blur-radius: 0.5rem;

        --badge-corner-radius: 4.0rem;

        --popup-border-width: 1px;
        --popup-border-opacity: 0.1;
        --popup-corner-radius: 4px;
        --popup-shadow-opacity: 0.05;
        --popup-shadow-horizontal-offset: 0px;
        --popup-shadow-vertical-offset: 4px;
        --popup-shadow-blur-radius: 5px;

        --drawer-border-width: 1px;
        --drawer-border-opacity: 0.1;
        --drawer-shadow-opacity: 0.0;
        --drawer-shadow-horizontal-offset: 0px;
        --drawer-shadow-vertical-offset: 4px;
        --drawer-shadow-blur-radius: 5px;

        --spacing-sections-desktop: 0px;
        --spacing-sections-mobile: 0px;

        --grid-desktop-vertical-spacing: 8px;
        --grid-desktop-horizontal-spacing: 8px;
        --grid-mobile-vertical-spacing: 4px;
        --grid-mobile-horizontal-spacing: 4px;

        --text-boxes-border-opacity: 0.1;
        --text-boxes-border-width: 0px;
        --text-boxes-radius: 4px;
        --text-boxes-shadow-opacity: 0.0;
        --text-boxes-shadow-visible: 0;
        --text-boxes-shadow-horizontal-offset: 0px;
        --text-boxes-shadow-vertical-offset: 4px;
        --text-boxes-shadow-blur-radius: 5px;

        --buttons-radius: 4px;
        --buttons-radius-outset: 5px;
        --buttons-border-width: 1px;
        --buttons-border-opacity: 1.0;
        --buttons-shadow-opacity: 0.0;
        --buttons-shadow-visible: 0;
        --buttons-shadow-horizontal-offset: 0px;
        --buttons-shadow-vertical-offset: 4px;
        --buttons-shadow-blur-radius: 5px;
        --buttons-border-offset: 0.3px;

        --inputs-radius: 4px;
        --inputs-border-width: 1px;
        --inputs-border-opacity: 0.55;
        --inputs-shadow-opacity: 0.0;
        --inputs-shadow-horizontal-offset: 0px;
        --inputs-margin-offset: 0px;
        --inputs-shadow-vertical-offset: 4px;
        --inputs-shadow-blur-radius: 5px;
        --inputs-radius-outset: 5px;

        --variant-pills-radius: 6px;
        --variant-pills-border-width: 1px;
        --variant-pills-border-opacity: 0.55;
        --variant-pills-shadow-opacity: 0.0;
        --variant-pills-shadow-horizontal-offset: 0px;
        --variant-pills-shadow-vertical-offset: 4px;
        --variant-pills-shadow-blur-radius: 5px;
      }

      *,
      *::before,
      *::after {
        box-sizing: inherit;
      }

      html {
        box-sizing: border-box;
        font-size: calc(var(--font-body-scale) * 62.5%);
        height: 100%;
      }

      body {
        display: grid;
        grid-template-rows: auto auto 1fr auto;
        grid-template-columns: 100%;
        min-height: 100%;
        margin: 0;
        font-size: 1.5rem;
        letter-spacing: 0.1rem!important;
        line-height: calc(1 + 0.8 / var(--font-body-scale));
        font-family: var(--font-body-family);
        font-style: var(--font-body-style);
        font-weight: var(--font-body-weight);
      }

      #loaderLogo {
        position: fixed;
        width: 100%;
        height: 100%;
        /* height: 100vh; */
        top: 0;
        left: 0;
        padding: 5rem;
        background-color: #fff;
        z-index: 11;
        justify-content: center;
        display: flex;
        align-items: center;
        /* background-clip: padding-box; */
      }

      .loader-text {
        animation: pulse 1.5s ease-in-out infinite;
        /* color: white;
        letter-spacing: 0px;
        word-spacing: 5px;
        font-size: 2.5rem; */
        mix-blend-mode: difference;
        width: 100%;
        height: auto;
      }

      @keyframes pulse {
        0% {
          opacity: 1;
        }
        50% {
          opacity: 0.5;
        }
        100% {
          opacity: 1;
        }
      }

      @media screen and (min-width: 750px) {
        body {
          font-size: 1.6rem;
        }
        #loaderLogo{
          padding: 35rem;
        }
      }
    </style>

    <link href="//wtflex.in/cdn/shop/t/81/assets/base.css?v=81110001503111789831735727959" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="//wtflex.in/cdn/shop/t/81/assets/component-cart-items.css?v=66526605165517285591730879288" media="print" onload="this.media='all'"><link href="//wtflex.in/cdn/shop/t/81/assets/component-cart-drawer.css?v=165306153048949317351735871259" rel="stylesheet" type="text/css" media="all" />
      <link href="//wtflex.in/cdn/shop/t/81/assets/component-cart.css?v=165982380921400067651730879288" rel="stylesheet" type="text/css" media="all" />
      <link href="//wtflex.in/cdn/shop/t/81/assets/component-totals.css?v=182586711168102096361730879288" rel="stylesheet" type="text/css" media="all" />
      <link href="//wtflex.in/cdn/shop/t/81/assets/component-price.css?v=42108041875070243851730879288" rel="stylesheet" type="text/css" media="all" />
      <link href="//wtflex.in/cdn/shop/t/81/assets/component-discounts.css?v=152760482443307489271730879288" rel="stylesheet" type="text/css" media="all" />

      <link rel="preload" as="font" href="//wtflex.in/cdn/fonts/helvetica/helvetica_n4.fe093fe9ca22a15354813c912484945a36b79146.woff2?h1=d2hhdC10aGUtZmxleC5hY2NvdW50Lm15c2hvcGlmeS5jb20&h2=d3RmbGV4Lmlu&hmac=0a21ae640e38a8fe415a31e66f68a6ed602bf558ecdd3e6c07d7e365b94fbef6" type="font/woff2" crossorigin>
      

      <link rel="preload" as="font" href="//wtflex.in/cdn/fonts/righteous/righteous_n4.ae12f723ca3ef357f8426575ae5515969ffe8b06.woff2?h1=d2hhdC10aGUtZmxleC5hY2NvdW50Lm15c2hvcGlmeS5jb20&h2=d3RmbGV4Lmlu&hmac=144cec91a45600a48daff276b95a4aa42290825480f569e381d0a3b4e3572421" type="font/woff2" crossorigin>
      
<script async src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script><link
        rel="stylesheet"
        href="//wtflex.in/cdn/shop/t/81/assets/component-predictive-search.css?v=105044260994032261141735728033"
        media="print"
        onload="this.media='all'"
      ><script>
      if (Shopify.designMode) {
        document.documentElement.classList.add('shopify-design-mode');
      }
    </script>
    <script type="text/javascript">
      (function(c,l,a,r,i,t,y){
          c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
          t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
          y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
      })(window, document, "clarity", "script", "nnmn2yxg04");
    </script>
  <link href="https://monorail-edge.shopifysvc.com" rel="dns-prefetch">
<script>(function(){if ("sendBeacon" in navigator && "performance" in window) {var session_token = document.cookie.match(/_shopify_s=([^;]*)/);function handle_abandonment_event(e) {var entries = performance.getEntries().filter(function(entry) {return /monorail-edge.shopifysvc.com/.test(entry.name);});if (!window.abandonment_tracked && entries.length === 0) {window.abandonment_tracked = true;var currentMs = Date.now();var navigation_start = performance.timing.navigationStart;var payload = {shop_id: 61545513126,url: window.location.href,navigation_start,duration: currentMs - navigation_start,session_token: session_token && session_token.length === 2 ? session_token[1] : "",page_type: "index"};window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({schema_id: "online_store_buyer_site_abandonment/1.1",payload: payload,metadata: {event_created_at_ms: currentMs,event_sent_at_ms: currentMs}}));}}window.addEventListener('pagehide', handle_abandonment_event);}}());</script>
<script id="web-pixels-manager-setup">(function d(d,e,r,n,o,a){var i,t,s,l,c=(t=(i={modern:/Edge?\/(1{2}[4-9]|1[2-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Firefox\/(1{2}[4-9]|1[2-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Chrom(ium|e)\/(9{2}|\d{3,})\.\d+(\.\d+|)|(Maci|X1{2}).+ Version\/(15\.\d+|(1[6-9]|[2-9]\d|\d{3,})\.\d+)([,.]\d+|)( \(\w+\)|)( Mobile\/\w+|) Safari\/|Chrome.+OPR\/(9{2}|\d{3,})\.\d+\.\d+|(CPU[ +]OS|iPhone[ +]OS|CPU[ +]iPhone|CPU IPhone OS|CPU iPad OS)[ +]+(15[._]\d+|(1[6-9]|[2-9]\d|\d{3,})[._]\d+)([._]\d+|)|Android:?[ /-](13\d|1[4-9]\d|[2-9]\d{2}|\d{4,})(\.\d+|)(\.\d+|)|Android.+Firefox\/(13\d|1[4-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Android.+Chrom(ium|e)\/(13\d|1[4-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|SamsungBrowser\/([2-9]\d|\d{3,})\.\d+/,legacy:/Edge?\/(1[6-9]|[2-9]\d|\d{3,})\.\d+(\.\d+|)|Firefox\/(5[4-9]|[6-9]\d|\d{3,})\.\d+(\.\d+|)|Chrom(ium|e)\/(5[1-9]|[6-9]\d|\d{3,})\.\d+(\.\d+|)([\d.]+$|.*Safari\/(?![\d.]+ Edge\/[\d.]+$))|(Maci|X1{2}).+ Version\/(10\.\d+|(1[1-9]|[2-9]\d|\d{3,})\.\d+)([,.]\d+|)( \(\w+\)|)( Mobile\/\w+|) Safari\/|Chrome.+OPR\/(3[89]|[4-9]\d|\d{3,})\.\d+\.\d+|(CPU[ +]OS|iPhone[ +]OS|CPU[ +]iPhone|CPU IPhone OS|CPU iPad OS)[ +]+(10[._]\d+|(1[1-9]|[2-9]\d|\d{3,})[._]\d+)([._]\d+|)|Android:?[ /-](13\d|1[4-9]\d|[2-9]\d{2}|\d{4,})(\.\d+|)(\.\d+|)|Mobile Safari.+OPR\/([89]\d|\d{3,})\.\d+\.\d+|Android.+Firefox\/(13\d|1[4-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Android.+Chrom(ium|e)\/(13\d|1[4-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Android.+(UC? ?Browser|UCWEB|U3)[ /]?(15\.([5-9]|\d{2,})|(1[6-9]|[2-9]\d|\d{3,})\.\d+)\.\d+|SamsungBrowser\/(5\.\d+|([6-9]|\d{2,})\.\d+)|Android.+MQ{2}Browser\/(14(\.(9|\d{2,})|)|(1[5-9]|[2-9]\d|\d{3,})(\.\d+|))(\.\d+|)|K[Aa][Ii]OS\/(3\.\d+|([4-9]|\d{2,})\.\d+)(\.\d+|)/}).modern,s=i.legacy,l=navigator.userAgent,t.test(l)?"modern":(s.test(l),"legacy")),u=null!=a?a:{modern:"",legacy:""};window.Shopify=window.Shopify||{};var f=window.Shopify;f.analytics=f.analytics||{};var h=f.analytics;h.replayQueue=[],h.publish=function(d,e,r){return h.replayQueue.push([d,e,r]),!0};try{self.performance.mark("wpm:start")}catch(d){}var m=[r,"/wpm","/b",o,c.substring(0,1),".js"].join(""),p=u[c],y=!1;!function(d){var e=d.src,r=d.async,n=void 0===r||r,o=d.onload,a=d.onerror,i=d.sri,t=document.createElement("script"),s=document.head,l=document.body;t.async=n,t.src=e,i&&(t.integrity=i,t.crossOrigin="anonymous"),o&&t.addEventListener("load",o),a&&t.addEventListener("error",a),s?s.appendChild(t):l?l.appendChild(t):console.error("Did not find a head or body element to append the script")}({src:m,async:!0,onload:function(){if(!y){var r=window.webPixelsManager.init(d)||void 0;if(r){y=!0,e(r);var n=window.Shopify.analytics;n.replayQueue.forEach((function(d){var e=d[0],n=d[1],o=d[2];r.publishCustomEvent(e,n,o)})),n.replayQueue=[],n.publish=r.publishCustomEvent,n.visitor=r.visitor}}},onerror:function(){var e=d.storefrontBaseUrl.replace(/\/$/,""),r="".concat(e,"/.well-known/shopify/monorail/unstable/produce_batch"),o=JSON.stringify({metadata:{event_sent_at_ms:(new Date).getTime()},events:[{schema_id:"web_pixels_manager_load/3.1",payload:{version:n||"latest",bundle_target:c,page_url:self.location.href,status:"failed",surface:d.surface,error_msg:"".concat(m," has failed to load")},metadata:{event_created_at_ms:(new Date).getTime()}}]});try{if(self.navigator.sendBeacon.bind(self.navigator)(r,o))return!0}catch(d){}var a=new XMLHttpRequest;try{return a.open("POST",r,!0),a.setRequestHeader("Content-Type","text/plain"),a.send(o),!0}catch(d){console&&console.warn&&console.warn("[Web Pixels Manager] Got an unhandled error while logging a load error.")}return!1},sri:function(d){return"string"==typeof d&&/^sha384-[A-Za-z0-9+/=]+$/.test(d)}(p)?p:""})})({shopId: 61545513126,storefrontBaseUrl: "https://wtflex.in",extensionsBaseUrl: "https://extensions.shopifycdn.com/cdn/shopifycloud/web-pixels-manager",surface: "storefront-renderer",enabledBetaFlags: ["6a396365"],webPixelsConfigList: [{"id":"613646502","configuration":"{\"config\":\"{\\\"pixel_id\\\":\\\"G-92KMKK3SFR\\\",\\\"target_country\\\":\\\"IN\\\",\\\"gtag_events\\\":[{\\\"type\\\":\\\"begin_checkout\\\",\\\"action_label\\\":[\\\"G-92KMKK3SFR\\\",\\\"AW-16635921455\\\/7NNeCIXbxMAZEK-I0Pw9\\\"]},{\\\"type\\\":\\\"search\\\",\\\"action_label\\\":[\\\"G-92KMKK3SFR\\\",\\\"AW-16635921455\\\/rAUgCP_axMAZEK-I0Pw9\\\"]},{\\\"type\\\":\\\"view_item\\\",\\\"action_label\\\":[\\\"G-92KMKK3SFR\\\",\\\"AW-16635921455\\\/EWD_CPzaxMAZEK-I0Pw9\\\",\\\"MC-3T1R15WTX7\\\"]},{\\\"type\\\":\\\"purchase\\\",\\\"action_label\\\":[\\\"G-92KMKK3SFR\\\",\\\"AW-16635921455\\\/y9HECNzYxMAZEK-I0Pw9\\\",\\\"MC-3T1R15WTX7\\\"]},{\\\"type\\\":\\\"page_view\\\",\\\"action_label\\\":[\\\"G-92KMKK3SFR\\\",\\\"AW-16635921455\\\/09UECPnaxMAZEK-I0Pw9\\\",\\\"MC-3T1R15WTX7\\\"]},{\\\"type\\\":\\\"add_payment_info\\\",\\\"action_label\\\":[\\\"G-92KMKK3SFR\\\",\\\"AW-16635921455\\\/4w1iCIjbxMAZEK-I0Pw9\\\"]},{\\\"type\\\":\\\"add_to_cart\\\",\\\"action_label\\\":[\\\"G-92KMKK3SFR\\\",\\\"AW-16635921455\\\/8oBQCILbxMAZEK-I0Pw9\\\"]}],\\\"enable_monitoring_mode\\\":false}\"}","eventPayloadVersion":"v1","runtimeContext":"OPEN","scriptVersion":"642ed32d7fafb3e0986c8ba3bf3908a1","type":"APP","apiClientId":1780363,"privacyPurposes":[]},{"id":"327876774","configuration":"{\"pixel_id\":\"368979939251644\",\"pixel_type\":\"facebook_pixel\",\"metaapp_system_user_token\":\"-\"}","eventPayloadVersion":"v1","runtimeContext":"OPEN","scriptVersion":"8d894c63179843e74a9691414b5ad83d","type":"APP","apiClientId":2329312,"privacyPurposes":["ANALYTICS","MARKETING","SALE_OF_DATA"]},{"id":"13107366","configuration":"{\"pixelId\":\"64511e87-b079-46fd-a2fc-7253a923e676\"}","eventPayloadVersion":"v1","runtimeContext":"STRICT","scriptVersion":"bb41bf091d86ec09beb5141ead6fafc0","type":"APP","apiClientId":2556259,"privacyPurposes":["ANALYTICS","MARKETING","SALE_OF_DATA"]},{"id":"shopify-app-pixel","configuration":"{}","eventPayloadVersion":"v1","runtimeContext":"STRICT","scriptVersion":"0281","apiClientId":"shopify-pixel","type":"APP","privacyPurposes":["ANALYTICS","MARKETING"]},{"id":"shopify-custom-pixel","eventPayloadVersion":"v1","runtimeContext":"LAX","scriptVersion":"0281","apiClientId":"shopify-pixel","type":"CUSTOM","privacyPurposes":["ANALYTICS","MARKETING"]}],isMerchantRequest: false,effectiveTopLevelDomain: "",initData: {"shop":{"name":"WHAT THE FLEX","paymentSettings":{"currencyCode":"INR"},"myshopifyDomain":"what-the-flex.myshopify.com","countryCode":"IN","storefrontUrl":"https:\/\/wtflex.in"},"customer":null,"cart":null,"checkout":null,"productVariants":[],"purchasingCompany":null},},function pageEvents(webPixelsManagerAPI) {webPixelsManagerAPI.publish("page_viewed", {});},"https://wtflex.in/cdn","04022d893a3a0afc4c7d7bf43333f26136cb5152","31f1bde6w315fc166pa0d70b41mc29186b0",{"modern":"","legacy":""});</script>  <script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
window.ShopifyAnalytics.meta.currency = 'INR';
var meta = {"page":{"pageType":"home"}};
for (var attr in meta) {
  window.ShopifyAnalytics.meta[attr] = meta[attr];
}</script>
<script>window.ShopifyAnalytics.merchantGoogleAnalytics = function() {
  
};
</script>
<script class="analytics">(window.gaDevIds=window.gaDevIds||[]).push('BwiEti');


(function () {
    var customDocumentWrite = function(content) {
      var jquery = null;

      if (window.jQuery) {
        jquery = window.jQuery;
      } else if (window.Checkout && window.Checkout.$) {
        jquery = window.Checkout.$;
      }

      if (jquery) {
        jquery('body').append(content);
      }
    };

    var hasLoggedConversion = function(token) {
      if (token) {
        return document.cookie.indexOf('loggedConversion=' + token) !== -1;
      }
      return false;
    }

    var setCookieIfConversion = function(token) {
      if (token) {
        var twoMonthsFromNow = new Date(Date.now());
        twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

        document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
      }
    }

    var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
    if (trekkie.integrations) {
      return;
    }
    trekkie.methods = [
      'identify',
      'page',
      'ready',
      'track',
      'trackForm',
      'trackLink'
    ];
    trekkie.factory = function(method) {
      return function() {
        var args = Array.prototype.slice.call(arguments);
        args.unshift(method);
        trekkie.push(args);
        return trekkie;
      };
    };
    for (var i = 0; i < trekkie.methods.length; i++) {
      var key = trekkie.methods[i];
      trekkie[key] = trekkie.factory(key);
    }
    trekkie.load = function(config) {
      trekkie.config = config || {};
      trekkie.config.initialDocumentCookie = document.cookie;
      var first = document.getElementsByTagName('script')[0];
      var script = document.createElement('script');
      script.type = 'text/javascript';
      script.onerror = function(e) {
        var scriptFallback = document.createElement('script');
        scriptFallback.type = 'text/javascript';
        scriptFallback.onerror = function(error) {
                var Monorail = {
      produce: function produce(monorailDomain, schemaId, payload) {
        var currentMs = new Date().getTime();
        var event = {
          schema_id: schemaId,
          payload: payload,
          metadata: {
            event_created_at_ms: currentMs,
            event_sent_at_ms: currentMs
          }
        };
        return Monorail.sendRequest("https://" + monorailDomain + "/v1/produce", JSON.stringify(event));
      },
      sendRequest: function sendRequest(endpointUrl, payload) {
        // Try the sendBeacon API
        if (window && window.navigator && typeof window.navigator.sendBeacon === 'function' && typeof window.Blob === 'function' && !Monorail.isIos12()) {
          var blobData = new window.Blob([payload], {
            type: 'text/plain'
          });

          if (window.navigator.sendBeacon(endpointUrl, blobData)) {
            return true;
          } // sendBeacon was not successful

        } // XHR beacon

        var xhr = new XMLHttpRequest();

        try {
          xhr.open('POST', endpointUrl);
          xhr.setRequestHeader('Content-Type', 'text/plain');
          xhr.send(payload);
        } catch (e) {
          console.log(e);
        }

        return false;
      },
      isIos12: function isIos12() {
        return window.navigator.userAgent.lastIndexOf('iPhone; CPU iPhone OS 12_') !== -1 || window.navigator.userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
      }
    };
    Monorail.produce('monorail-edge.shopifysvc.com',
      'trekkie_storefront_load_errors/1.1',
      {shop_id: 61545513126,
      theme_id: 139942133926,
      app_name: "storefront",
      context_url: window.location.href,
      source_url: "//wtflex.in/cdn/s/trekkie.storefront.c44d6898594db6c4847cb75ef4de7d5f4456a012.min.js"});

        };
        scriptFallback.async = true;
        scriptFallback.src = '//wtflex.in/cdn/s/trekkie.storefront.c44d6898594db6c4847cb75ef4de7d5f4456a012.min.js';
        first.parentNode.insertBefore(scriptFallback, first);
      };
      script.async = true;
      script.src = '//wtflex.in/cdn/s/trekkie.storefront.c44d6898594db6c4847cb75ef4de7d5f4456a012.min.js';
      first.parentNode.insertBefore(script, first);
    };
    trekkie.load(
      {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":61545513126,"isMerchantRequest":null,"themeId":139942133926,"themeCityHash":"8438049341508625401","contentLanguage":"en","currency":"INR"},"isServerSideCookieWritingEnabled":true,"monorailRegion":"shop_domain"},"Google Analytics":{"trackingId":"UA-235935770-1","domain":"auto","siteSpeedSampleRate":"10","enhancedEcommerce":true,"doubleClick":true,"includeSearch":true},"Session Attribution":{},"S2S":{"facebookCapiEnabled":true,"source":"trekkie-storefront-renderer","apiClientId":580111}}
    );

    var loaded = false;
    trekkie.ready(function() {
      if (loaded) return;
      loaded = true;

      window.ShopifyAnalytics.lib = window.trekkie;

        ga('require', 'linker');
      function addListener(element, type, callback) {
        if (element.addEventListener) {
          element.addEventListener(type, callback);
        }
        else if (element.attachEvent) {
          element.attachEvent('on' + type, callback);
        }
      }
      function decorate(event) {
        event = event || window.event;
        var target = event.target || event.srcElement;
        if (target && (target.getAttribute('action') || target.getAttribute('href'))) {
          ga(function (tracker) {
            var linkerParam = tracker.get('linkerParam');
            document.cookie = '_shopify_ga=' + linkerParam + '; ' + 'path=/';
          });
        }
      }
      addListener(window, 'load', function(){
        for (var i=0; i < document.forms.length; i++) {
          var action = document.forms[i].getAttribute('action');
          if(action && action.indexOf('/cart') >= 0) {
            addListener(document.forms[i], 'submit', decorate);
          }
        }
        for (var i=0; i < document.links.length; i++) {
          var href = document.links[i].getAttribute('href');
          if(href && href.indexOf('/checkout') >= 0) {
            addListener(document.links[i], 'click', decorate);
          }
        }
      });
    

      var originalDocumentWrite = document.write;
      document.write = customDocumentWrite;
      try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
      document.write = originalDocumentWrite;

      window.ShopifyAnalytics.lib.page(null,{"pageType":"home","shopifyEmitted":true});

      var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
      var token = match? match[1]: undefined;
      if (!hasLoggedConversion(token)) {
        setCookieIfConversion(token);
        
      }
    });


        var eventsListenerScript = document.createElement('script');
        eventsListenerScript.async = true;
        eventsListenerScript.src = "//wtflex.in/cdn/shopifycloud/shopify/assets/shop_events_listener-20905db421adb60b04582abab58b285362bc2e1011d17cd3eabb3bfe05798c59.js";
        document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);

})();</script>
<script class="boomerang">
(function () {
  window.BOOMR = window.BOOMR || {};
  window.BOOMR.themeName = "Dawn";
  window.BOOMR.themeVersion = "15.0.2";
  window.BOOMR.shopId = 61545513126;
  window.BOOMR.themeId = 139942133926;
})();</script>
<script
  defer
  src="https://wtflex.in/cdn/shopifycloud/perf-kit/shopify-perf-kit-1.1.0.min.js"
  data-application="storefront-renderer"
  data-shop-id="61545513126"
  data-render-region="gcp-asia-southeast1"
  data-page-type="index"
  data-theme-instance-id="139942133926"
  data-monorail-region="shop_domain"
  data-resource-timing-sampling-rate="10"
></script>
</head>

  <body class="gradient">
    
      <!-- <div id="loaderLogo">
        <img
          src="https://cdn.shopify.com/s/files/1/0615/4551/3126/files/remove.png?v=1728546548"
          class="loader-text"
        >
      </div> -->
    
    <a class="skip-to-content-link button visually-hidden" href="#MainContent">
      Skip to content
    </a>
    <div
      id="lottie-animation"
      style="width: 100vw; height: 100vh; position: fixed; top: 0; left: 0; display: none; pointer-events: none; z-index: 999;"
    ></div>
    <audio id="brickSound" controls style="display: none">
      <source
        src="https://cdn.shopify.com/s/files/1/0615/4551/3126/files/Balloon_Shimmer_Sound.mp3?v=1728545272"
        type="audio/mpeg"
      >
      Your browser does not support the audio element.
    </audio>

<link href="//wtflex.in/cdn/shop/t/81/assets/quantity-popover.css?v=78745769908715669131730879288" rel="stylesheet" type="text/css" media="all" />
<link href="//wtflex.in/cdn/shop/t/81/assets/component-card.css?v=165197172554000981641730879288" rel="stylesheet" type="text/css" media="all" />

<script>
function updateProgressBar(cartPrice){
  cartPrice /= 100;
  
  const discountPrice1 = 1995;
  const discountPrice2 = 3995;   
  const discountPrice3 = 4995;   
  
  let awayPrice = 0;  
  let discountLabel = '';
  
  const tick = 'https://cdn.shopify.com/s/files/1/0615/4551/3126/files/tick.png?v=1703405787';
  const discountIcon = 'https://cdn.shopify.com/s/files/1/0615/4551/3126/files/discount.png?v=1703405787'
  const discountIcon2 = 'https://cdn.shopify.com/s/files/1/0615/4551/3126/files/fire-discount.png?v=1703405787'

  let tick1Done = false;
  let tick2Done = false;
  let tick3Done = false;

  let halfTierOff = false;
  let oneTierOff = false;
  let twoTierOff = false;
  // console.log("Cart price: ", cartPrice);
  if(cartPrice>=4995){
    discountLabel = '20% discount';
    awayPrice = discountPrice3-cartPrice;
    tick3Done = true;
    twoTierOff = true;    
    discountLabel =  false;
  } else if(cartPrice >= 3995){
    discountLabel = '20% discount';
    awayPrice = discountPrice3-cartPrice;
    tick2Done = true;
    oneTierOff = true;    
  } else if(cartPrice >= 1995){
    discountLabel = '15% discount';
    awayPrice = discountPrice2-cartPrice;
    tick1Done = true;
    halfTierOff = true;    
  } else{    
    discountLabel = '10% discount';
    awayPrice = discountPrice1-cartPrice;       
  }      
  // console.log("Away price: ", awayPrice);
  // console.log("Discount Label: ", discountLabel);    
  let fillingStatus = Math.round((cartPrice / 4995) * 100);
  // console.log("Fill status: ",fillingStatus);
  if(fillingStatus<40){
    fillingStatus = 8;
  } else if(fillingStatus<80){
    fillingStatus = 30;
  }
  else if(fillingStatus>99){
    fillingStatus = 100;
  }else{
    fillingStatus = 70;    
  }
  if(cartPrice == 4994){
    fillingStatus= 70
  }
  // console.log("Fill status updated: ",fillingStatus);  
  document.querySelector('.filling-liquid').style.width = `${fillingStatus}%`;
  
  if(discountLabel){    
    document.getElementById('awayPrice').innerText = awayPrice;
    document.querySelector('.discountLabel').innerText = discountLabel;
  } else{        
    document.querySelector('.add-prod-line').style.display = 'none';
  }  

  if(halfTierOff){
    // console.log('1st discount is given');
    document.querySelector('.discount-line').innerHTML = `
      Use <span class="cartGreen">FESTIVEFLEX10</span> to get 10% Off 🎉
    `;
  } 
  if(oneTierOff){
    // console.log('2nd discount is given');
    document.querySelector('.discount-line').innerHTML = `
      Use <span class="cartGreen">FESTIVEFLEX15</span> to get 15% Off 🎉
    `;
  } 
  if(twoTierOff){
    // console.log('3rd discount is given');
    document.querySelector('.discount-line').innerHTML = `
      Use <span class="cartGreen">FESTIVEFLEX20</span> to get 20% Off 🎉
    `;
  }
  
  if(tick1Done){
    // console.log('tick 1 should be added');
    document.querySelector('.proIcon1').src = tick;
  } 
  if(tick2Done){
    // console.log('tick 1 & 2 should be added');
    document.querySelector('.proIcon1').src = tick;
    document.querySelector('.proIcon2').src = tick;
  } 
  if(tick3Done){
    // console.log('tick 1,2,3 should be added');    
    document.querySelector('.proIcon1').src = tick;
    document.querySelector('.proIcon2').src = tick;
    document.querySelector('.proIcon3').src = tick;    
  }  
}
</script>

<script src="//wtflex.in/cdn/shop/t/81/assets/cart.js?v=129669390907670746821730879288" defer="defer"></script>
<script src="//wtflex.in/cdn/shop/t/81/assets/quantity-popover.js?v=987015268078116491730879288" defer="defer"></script>

<style>
  .drawer {
    visibility: hidden;
  }
  .cart-drawer{
        display: flex;
    justify-content: center;
    align-items: center;
  }
</style>

<cart-drawer class="drawer is-empty">
  <div id="CartDrawer" class="cart-drawer">
    <div id="CartDrawer-Overlay" class="cart-drawer__overlay"></div>
    <div
      class="drawer__inner gradient color-scheme-1"
      role="dialog"
      aria-modal="true"
      aria-label="My Cart"
      tabindex="-1"
    ><div class="drawer__inner-empty">
          <div class="cart-drawer__warnings center cart-drawer__warnings--has-collection">
            <div class="cart-drawer__empty-content">
              <h2 class="cart__empty-text uppercase closer-text">Cart&#39;s lighter than my wallet!</h2>
              <button
                class="drawer__close"
                type="button"
                onclick="this.closest('cart-drawer').close()"
                aria-label="Close"
              >
                <style>
  .icon-close{
    color:black;
  }
</style>
<svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-close"
  fill="none"
  viewBox="0 0 18 17"
>
  <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
</svg>

              </button>
              <a href="/collections/all" class="button">
                CONTINUE SHOPPING
              </a></div>
          </div><div class="cart-drawer__collection">
              
<div class="card-wrapper animate-arrow collection-card-wrapper">
  <div
    class="
      card
      card--standard
       card--media
      
      
      
    "
    style="--ratio-percent: 100%;"
  >
    <div
      class="card__inner color-scheme-2 gradient ratio"
      style="--ratio-percent: 100%;"
    ><div class="card__media">
          <div class="media media--transparent media--hover-effect">
            <img
              srcset="//wtflex.in/cdn/shop/collections/Lightweight_Travis.jpg?v=1738490715&width=165 165w,//wtflex.in/cdn/shop/collections/Lightweight_Travis.jpg?v=1738490715&width=330 330w,//wtflex.in/cdn/shop/collections/Lightweight_Travis.jpg?v=1738490715&width=535 535w,//wtflex.in/cdn/shop/collections/Lightweight_Travis.jpg?v=1738490715&width=750 750w,//wtflex.in/cdn/shop/collections/Lightweight_Travis.jpg?v=1738490715&width=1000 1000w,//wtflex.in/cdn/shop/collections/Lightweight_Travis.jpg?v=1738490715 1080w
              "
              src="//wtflex.in/cdn/shop/collections/Lightweight_Travis.jpg?v=1738490715&width=1500"
              sizes="
                (min-width: 1600px) 1500px,
                (min-width: 750px) calc(100vw - 10rem),
                calc(100vw - 3rem)
              "
              alt="LIGHTWEIGHT T-SHIRTS"
              height="1350"
              width="1080"
              loading="lazy"
              class="motion-reduce"
            >
          </div>
        </div><div class="card__content">
          <div class="card__information">
            <h3 class="card__heading">
              <a
                
                  href="/collections/lightweight-t-shirts"
                
                class="full-unstyled-link"
              >LIGHTWEIGHT T-SHIRTS<span class="icon-wrap"><svg
  viewBox="0 0 14 10"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="icon icon-arrow"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>
</span>
              </a>
            </h3></div>
        </div></div><div class="card__content">
        <div class="card__information">
          <h3 class="card__heading">
            <a
              
                href="/collections/lightweight-t-shirts"
              
              class="full-unstyled-link"
            >LIGHTWEIGHT T-SHIRTS<span class="icon-wrap"><svg
  viewBox="0 0 14 10"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="icon icon-arrow"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>
</span>
            </a>
          </h3></div>
      </div></div>
</div>

            </div></div><div class="drawer__header">
        <h2 class="drawer__heading uppercase" style="font-size: 20px">My Cart</h2>
        <button
          class="drawer__close"
          type="button"
          onclick="this.closest('cart-drawer').close()"
          aria-label="Close"
        >
          <style>
  .icon-close{
    color:black;
  }
</style>
<svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-close"
  fill="none"
  viewBox="0 0 18 17"
>
  <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
</svg>

        </button>
      </div>
      
      <cart-drawer-items
        
          class=" is-empty"
        
      >
        <form
          action="/cart"
          id="CartDrawer-Form"
          class="cart__contents cart-drawer__form"
          method="post"
        >
          <div id="CartDrawer-CartItems" class="drawer__contents js-contents"><p id="CartDrawer-LiveRegionText" class="visually-hidden" role="status"></p>
            <p id="CartDrawer-LineItemStatus" class="visually-hidden" aria-hidden="true" role="status">
              Loading...
            </p>
          </div>
          <div id="CartDrawer-CartErrors" role="alert"></div>
        </form>
        
      </cart-drawer-items>
      <div class="drawer__footer"><!-- Start blocks -->
        <!-- Subtotals -->

        <div class="cart-drawer__footer" >
          <div></div>

          <div class="totals" role="status">
            <h2 class="totals__total uppercase">Subtotal</h2>
            <p class="totals__total-value">₹ 0.00</p>
          </div>

          
        </div>

        <!-- CTAs -->

        <div class="cart__ctas" >
          <!-- <button
            type="submit"
            id="CartDrawer-Checkout"
            class="cart__checkout-button button uppercase"
            name="checkout"
            data-sound="true"
            form="CartDrawer-Form"
            
              disabled
            
          >
            <span class="btn-txt">Proceed to Pay</span>
            <span class="pay-opt-icon">
              <img class="upi" src="https://cdn.gokwik.co/v4/images/upi-icons.svg">
              <img class="arr" src="https://cdn.gokwik.co/v4/images/right-arrow.svg">         
            </span>
          </button> -->
          
<div class="gokwik-checkout">
  <button type='button' class="button disabled" disabled onclick="onCheckoutClick(this)">
            <span class="btn-text" >
                <span>PROCEED TO PAY</span>
                <span></span>
            </span>
          <span class="pay-opt-icon">
             <img src="https://cdn.gokwik.co/v4/images/upi-icons.svg">
             <img src="https://cdn.gokwik.co/v4/images/right-arrow.svg">
         
 </span>
    <div style="display:none" class="addloadr" id="btn-loader"><div class="cir-loader">Loading..</div></div>
  </button>
</div>


        </div>
      </div>
    </div>
  </div>
</cart-drawer>

<script>
  window.isSale = false;
  
</script><!-- BEGIN sections: header-group -->
<div id="shopify-section-sections--17607312670886__small_marquee_RUD89T" class="shopify-section shopify-section-group-header-group">
<style>
  .topMarqDiv {
    background: #000;
    width: 100%;
    overflow-x: hidden;
    overflow-y: hidden;
    z-index: 0;
    position: relative;
  }
  .topMarq div {
    width: 100%;
    white-space: nowrap;
    letter-spacing: 0.3px;
    margin-right: 3px;
  }
  .topMarq {    
    background: #000 !important;
    height: 3rem !important;
    min-width: 280vw !important;
    font-size: 3vw !important;
    font-weight: normal;
    animation: bannermove 20s linear infinite !important;
    position: relative;
    overflow-x: hidden;
    overflow-y: hidden;
    line-height: 36px;
     color: #fafafa;
    text-transform: uppercase;
    display: flex;
    justify-content: space-between;
   align-items: center;
  }
  .topMarq:hover {
    animation-play-state: paused;
  }
  @media screen and (min-width: 750px){
    .topMarq{
      font-size: 2vw !important;
      height: 2rem !important;
      padding: 1.5rem 0;
    }
  }
  @media screen and (min-width: 1200px){
    .topMarq{
      font-size: 1.5vw !important;      
      padding: 2rem 0;
    }
  }
</style>

<div class="topMarqDiv">
  <div class="topMarq">
    <div>✦ FLAT 10% OFF for your first purchase! ✦ Use Code : NEW10</div>
    <div>✦ FLAT 10% OFF for your first purchase! ✦ Use Code : NEW10</div>
    <div>✦ FLAT 10% OFF for your first purchase! ✦ Use Code : NEW10</div>
    <div>✦ FLAT 10% OFF for your first purchase! ✦ Use Code : NEW10</div>
  </div>
</div>
</div><div id="shopify-section-sections--17607312670886__header" class="shopify-section shopify-section-group-header-group section-header"><link rel="stylesheet" href="//wtflex.in/cdn/shop/t/81/assets/component-list-menu.css?v=151968516119678728991730879288" media="print" onload="this.media='all'">
<link rel="stylesheet" href="//wtflex.in/cdn/shop/t/81/assets/component-search.css?v=127305248415443941411730879288" media="print" onload="this.media='all'">
<link rel="stylesheet" href="//wtflex.in/cdn/shop/t/81/assets/component-menu-drawer.css?v=59579096886857199531730879288" media="print" onload="this.media='all'">
<link rel="stylesheet" href="//wtflex.in/cdn/shop/t/81/assets/component-cart-notification.css?v=54116361853792938221730879288" media="print" onload="this.media='all'"><link rel="stylesheet" href="//wtflex.in/cdn/shop/t/81/assets/component-price.css?v=42108041875070243851730879288" media="print" onload="this.media='all'"><style>
  header-drawer {
    justify-self: left;
    margin-left: -1.2rem;
  }.menu-drawer-container {
    display: flex;
  }

  .list-menu {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .list-menu--inline {
    display: inline-flex;
    flex-wrap: wrap;
  }

  summary.list-menu__item {
    padding-right: 2.7rem;
  }

  .list-menu__item {
    display: flex;
    align-items: center;
    line-height: calc(1 + 0.3 / var(--font-body-scale));
  }

  .list-menu__item--link {
    text-decoration: none;
    padding-bottom: 1rem;
    padding-top: 1rem;
    line-height: calc(1 + 0.8 / var(--font-body-scale));
  }

  @media screen and (min-width: 750px) {
    .list-menu__item--link {
      padding-bottom: 0.5rem;
      padding-top: 0.5rem;
    }
  }
</style><style data-shopify>.nav-left{
    background: black;
    display: flex !important;
    position: absolute;
    color: black;
    top: 0.5rem;
    left: 0;
    border-bottom-right-radius: 6px;
    border-top-right-radius: 6px;
    align-items: center;
    width: 7rem;
    height: 5rem;
  }
  .nav-right{
    background: black;
    display: flex !important;
    position: absolute;
    color: black;
    top: 0.5rem;
    right: 0;
    border-bottom-left-radius: 6px;
    border-top-left-radius: 6px;
    align-items: center;
    width: 7rem;
    height: 5rem;
  }
  .header {
    padding: 2px 2rem 3px 2rem;
    border-bottom: 1px solid;
  }

  .section-header {
    position: sticky; /* This is for fixing a Safari z-index issue. PR #2147 */
    margin-bottom: 0px;
  }

  .left__icons{
    display: inline-flex;
    justify-self: start;
    padding-right: 0.8rem;
    grid-area: 1;
    gap: 1.5rem;
  }

  @media screen and (min-width: 750px) {
    .section-header {
      margin-bottom: 0px;
    }
    .header__icons{
      padding-right: 0;
    }
  }

  @media screen and (min-width: 990px) {
    .header {
      padding-top: 4px;
      padding-bottom: 4px;
    }    
  }</style><script src="//wtflex.in/cdn/shop/t/81/assets/cart-notification.js?v=133508293167896966491730879288" defer="defer"></script>

<svg xmlns="http://www.w3.org/2000/svg" class="hidden">
  <symbol id="icon-search" viewbox="0 0 18 19" fill="none">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.03 11.68A5.784 5.784 0 112.85 3.5a5.784 5.784 0 018.18 8.18zm.26 1.12a6.78 6.78 0 11.72-.7l5.4 5.4a.5.5 0 11-.71.7l-5.41-5.4z" fill="currentColor"/>
  </symbol>

  <symbol id="icon-reset" class="icon icon-close"  fill="none" viewBox="0 0 18 18" stroke="currentColor">
    <circle r="8.5" cy="9" cx="9" stroke-opacity="0.2"/>
    <path d="M6.82972 6.82915L1.17193 1.17097" stroke-linecap="round" stroke-linejoin="round" transform="translate(5 5)"/>
    <path d="M1.22896 6.88502L6.77288 1.11523" stroke-linecap="round" stroke-linejoin="round" transform="translate(5 5)"/>
  </symbol>

  <symbol id="icon-close" class="icon icon-close" fill="none" viewBox="0 0 18 17">
    <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
  </symbol>
</svg><sticky-header data-sticky-type="always" class="header-wrapper color-scheme-1 gradient"><div class="nav-left"></div>
  <div class="nav-right"></div>
  <header class="header header--middle-center header--mobile-center page-width drawer-menu header--has-menu">
    
    <div class="left__icons"><style>
  .utility-container{
    display: flex;
    padding: 0 2rem;
    width: 100%;
    position: relative;
    gap: 5%;
    justify-content: space-between;
    margin: 3rem 0;
  }
  .utility-container .utility-links{
    gap: 6px;
    width: 20%;
    display: flex;
    color: inherit;
    font-size: 13px;
    text-wrap: nowrap;
    align-items: center;
    flex-direction: column;
    text-decoration: none;
  }
  .utility-container .utility-links img{
    width: 5rem;
  }
  .utility-container .utility-links p{
    margin: 0;    
  }
  .small-list-item a{
    font-size: 12px;
  }
  .headMenuLinks{
    font-size: 14px;
    color: white;
    font-weight: bold;
    letter-spacing: 1px;
    margin: 0;
    margin-top: 2rem;
  }
  .header__icon--menu .icon-close{
    color:white;
  }
</style>

<header-drawer data-breakpoint="desktop">
  <details id="Details-menu-drawer-container" class="menu-drawer-container">
    <summary
      class="header__icon header__icon--menu header__icon--summary link focus-inset"
      aria-label="Menu"
    >
      <span>
        <style>
  .icon-hamburger{
    color:white;
    width: 1.5rem!important;
    height: 1.5rem!important;
  }
</style>

<svg focusable="false" width="18" height="14" class="icon icon-hamburger" viewBox="0 0 18 14">
  <path d="M0 1h18M0 13h18H0zm0-6h18H0z" fill="none" stroke="currentColor" stroke-width="2"></path>
</svg>

<!-- <svg
  xmlns="http://www.w3.org/2000/svg"
  width="48"
  height="48"
  viewBox="0 0 24 24"
  aria-hidden="true"
  focusable="false"
  class="icon icon-hamburger"
  fill="none"
>
  <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 17h8m-8-5h14m-8-5h8" />
</svg> -->

        <style>
  .icon-close{
    width: 1.5rem!important;
    height: 1.5rem!important;
  }
  .cart-drawer .icon-close path{
    fill: black;
  }
</style>
<svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-close"
  fill="none"
  viewBox="0 0 18 17"
>
  <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
</svg>

      </span>
    </summary>
    <div id="menu-drawer" class="gradient menu-drawer motion-reduce color-scheme-4">
      <div class="menu-drawer__inner-container">
        <div class="menu-drawer__navigation-container">
          <nav class="menu-drawer__navigation">
            <ul class="menu-drawer__menu has-submenu list-menu" role="list">
              <li>
                <a id="HeaderDrawer-blogs" href="/collections/all" class="headMenuLinks menu-drawer__menu-item list-menu__item link link--text focus-inset">Shop All</a>
              </li>
              <hr style="margin: 0 2rem;">
                <li class=""><a
                      id="HeaderDrawer-oversized-t-shirts"
                      href="/collections/oversized-t-shirt"
                      class="simple-menu-links menu-drawer__menu-item list-menu__item link link--text focus-inset"
                      
                    >
                      Oversized T-shirts
                    </a></li>
                <li class=""><a
                      id="HeaderDrawer-the-bottom-trends"
                      href="/collections/the-bottom-trends"
                      class="simple-menu-links menu-drawer__menu-item list-menu__item link link--text focus-inset"
                      
                    >
                      The Bottom Trends
                    </a></li>
                <li class=""><a
                      id="HeaderDrawer-winter-essentials"
                      href="/collections/winter-essentials"
                      class="simple-menu-links menu-drawer__menu-item list-menu__item link link--text focus-inset"
                      
                    >
                      Winter Essentials
                    </a></li>
                <li class=""><a
                      id="HeaderDrawer-denims-by-wtf"
                      href="/collections/denims-by-wtf"
                      class="simple-menu-links menu-drawer__menu-item list-menu__item link link--text focus-inset"
                      
                    >
                      Denim&#39;s by WTF
                    </a></li>
                <li class=""><a
                      id="HeaderDrawer-bowling-shirts"
                      href="/collections/bowling-shirts"
                      class="simple-menu-links menu-drawer__menu-item list-menu__item link link--text focus-inset"
                      
                    >
                      Bowling Shirts
                    </a></li>
                <li class=""><a
                      id="HeaderDrawer-basics-by-wtf"
                      href="/collections/basics-by-wtf"
                      class="simple-menu-links menu-drawer__menu-item list-menu__item link link--text focus-inset"
                      
                    >
                      Basic&#39;s By WTF
                    </a></li>
                <li class=""><a
                      id="HeaderDrawer-wtf-x-zostel"
                      href="/collections/wtf-x-zostel"
                      class="simple-menu-links menu-drawer__menu-item list-menu__item link link--text focus-inset"
                      
                    >
                      WTF x Zostel
                    </a></li>
                  <li>
                    <a id="HeaderDrawer-blogs" href="#" class="headMenuLinks menu-drawer__menu-item list-menu__item link link--text focus-inset">Resources</a>
                  </li>
                  <hr style="margin: 0 2rem;">
                
                <li class="small-list-item"><a
                      id="HeaderDrawer-blogs"
                      href="/blogs/wtflex-tips"
                      class="simple-menu-links menu-drawer__menu-item list-menu__item link link--text focus-inset"
                      
                    >
                      Blogs
                    </a></li>
                <li class=""><a
                      id="HeaderDrawer-exchange-policy"
                      href="/policies/refund-policy"
                      class="simple-menu-links menu-drawer__menu-item list-menu__item link link--text focus-inset"
                      
                    >
                      Exchange Policy
                    </a></li>
                <li class="small-list-item"><a
                      id="HeaderDrawer-shipping-policy"
                      href="/policies/shipping-policy"
                      class="simple-menu-links menu-drawer__menu-item list-menu__item link link--text focus-inset"
                      
                    >
                      Shipping Policy
                    </a></li>
                <li class="small-list-item"><a
                      id="HeaderDrawer-privacy-policy"
                      href="/policies/privacy-policy"
                      class="simple-menu-links menu-drawer__menu-item list-menu__item link link--text focus-inset"
                      
                    >
                      Privacy Policy
                    </a></li></ul>
            <div class="utility-container">                            
              <a class="utility-links" href="/policies/contact-information">
                <img src="https://cdn.shopify.com/s/files/1/0615/4551/3126/files/Call.png" alt="Nav Help">
                <p>Contact Us</p>
              </a>       
              <a class="utility-links" href="/apps/ils/tracking/">
                <img src="https://cdn.shopify.com/s/files/1/0615/4551/3126/files/Track_Now.png" alt="Nav Help">
                <p>Track Now</p>
              </a> 
              <a class="utility-links" href="https://what-the-flex.myshopify.com/apps/return_prime">
                <img src="https://cdn.shopify.com/s/files/1/0615/4551/3126/files/Exchange_06df1972-6ecf-4414-866f-9ea4d74f95fd.png" alt="Nav Help">
                <p>Exchange</p>
              </a>       
              <a class="utility-links" href="/account">
                <img src="https://cdn.shopify.com/s/files/1/0615/4551/3126/files/Account.png" alt="Nav Help">
                <p>Account</p>
              </a>
            </div>
          </nav>
          <div class="menu-drawer__utility-links"><div class="menu-drawer__localization header-localization">
</div><ul class="list list-social list-unstyled" role="list"></ul>
          </div>
        </div>
      </div>
    </div>
  </details>
</header-drawer>


<details-modal class="header__search">
  <details>
    <summary
      class="header__icon header__icon--search header__icon--summary link focus-inset modal__toggle"
      aria-haspopup="dialog"
      aria-label="Search"
    >
      <span>
        <svg class="modal__toggle-open icon icon-search" aria-hidden="true" focusable="false">
          <use href="#icon-search">
        </svg>
        <svg class="modal__toggle-close icon icon-close" aria-hidden="true" focusable="false">
          <use href="#icon-close">
        </svg>
      </span>
    </summary>
    <div
      class="search-modal modal__content gradient"
      role="dialog"
      aria-modal="true"
      aria-label="Search"
    >
      <div class="modal-overlay"></div>
      <div
        class="search-modal__content search-modal__content-bottom"
        tabindex="-1"
      ><predictive-search class="search-modal__form" data-loading-text="Loading..."><form action="/search" method="get" role="search" class="search search-modal__form">
          <div class="field">
            <input
              class="search__input field__input"
              id="Search-In-Modal"
              type="search"
              name="q"
              value=""
              placeholder="Search"role="combobox"
                aria-expanded="false"
                aria-owns="predictive-search-results"
                aria-controls="predictive-search-results"
                aria-haspopup="listbox"
                aria-autocomplete="list"
                autocorrect="off"
                autocomplete="off"
                autocapitalize="off"
                spellcheck="false">
            <label class="field__label" for="Search-In-Modal">Search</label>
            <input type="hidden" name="options[prefix]" value="last">
            <button
              type="reset"
              class="reset__button field__button hidden"
              aria-label="Clear search term"
            >
              <svg class="icon icon-close" aria-hidden="true" focusable="false">
                <use xlink:href="#icon-reset">
              </svg>
            </button>
            <button class="search__button field__button" aria-label="Search">
              <svg class="icon icon-search" aria-hidden="true" focusable="false">
                <use href="#icon-search">
              </svg>
            </button>
          </div><div class="predictive-search predictive-search--header" tabindex="-1" data-predictive-search>

<div class="predictive-search__loading-state">
  <svg
    aria-hidden="true"
    focusable="false"
    class="spinner"
    viewBox="0 0 66 66"
    xmlns="http://www.w3.org/2000/svg"
  >
    <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
  </svg>
</div>
</div>

            <span class="predictive-search-status visually-hidden" role="status" aria-hidden="true"></span></form></predictive-search><button
          type="button"
          class="search-modal__close-button modal__close-button link link--text focus-inset"
          aria-label="Close"
        >
          <svg class="icon icon-close" aria-hidden="true" focusable="false">
            <use href="#icon-close">
          </svg>
        </button>
      </div>
    </div>
  </details>
</details-modal>

    </div>
<h1 class="header__heading"><a href="/" class="header__heading-link link link--text focus-inset"><div class="header__heading-logo-wrapper">
                
                <img src="//wtflex.in/cdn/shop/files/logo_wtf.png?v=1655663734&amp;width=600" alt="WHAT THE FLEX" srcset="//wtflex.in/cdn/shop/files/logo_wtf.png?v=1655663734&amp;width=50 50w, //wtflex.in/cdn/shop/files/logo_wtf.png?v=1655663734&amp;width=75 75w, //wtflex.in/cdn/shop/files/logo_wtf.png?v=1655663734&amp;width=100 100w" width="50" height="41.1144578313253" loading="eager" class="header__heading-logo" sizes="(min-width: 750px) 50px, 50vw">
              </div></a></h1><div class="header__icons header__icons--localization header-localization">
      <div class="desktop-localization-wrapper">
</div><a href="/cart" class="header__icon header__icon--cart link focus-inset" id="cart-icon-bubble"><style>
  .icon-cart-empty{
    color:white;
    height: 2.4rem!important;
  }
</style>
<!-- <svg
  class="icon icon-cart-empty"
  aria-hidden="true"
  focusable="false"
  xmlns="http://www.w3.org/2000/svg"
  viewBox="0 0 40 40"
  fill="none"
>
  <path d="m15.75 11.8h-3.16l-.77 11.6a5 5 0 0 0 4.99 5.34h7.38a5 5 0 0 0 4.99-5.33l-.78-11.61zm0 1h-2.22l-.71 10.67a4 4 0 0 0 3.99 4.27h7.38a4 4 0 0 0 4-4.27l-.72-10.67h-2.22v.63a4.75 4.75 0 1 1 -9.5 0zm8.5 0h-7.5v.63a3.75 3.75 0 1 0 7.5 0z" fill="currentColor" fill-rule="evenodd"/>
</svg> -->

<svg
  xmlns="http://www.w3.org/2000/svg"
  width="48"
  height="48"
  viewBox="0 0 24 24"
  class="icon icon-cart-empty"
  aria-hidden="true"
  focusable="false"
  fill="none"
>
  <path fill="currentColor" d="M5 22h14c1.103 0 2-.897 2-2V9a1 1 0 0 0-1-1h-3V7c0-2.757-2.243-5-5-5S7 4.243 7 7v1H4a1 1 0 0 0-1 1v11c0 1.103.897 2 2 2M9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v1H9zm-4 3h2v2h2v-2h6v2h2v-2h2l.002 10H5z" />
</svg>
<span class="visually-hidden">Cart</span></a>
    </div>
  </header>
  
</sticky-header>

<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "WHAT THE FLEX",
    
      "logo": "https:\/\/wtflex.in\/cdn\/shop\/files\/logo_wtf.png?v=1655663734\u0026width=500",
    
    "sameAs": [
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      ""
    ],
    "url": "https:\/\/wtflex.in"
  }
</script>
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "WebSite",
      "name": "WHAT THE FLEX",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https:\/\/wtflex.in\/search?q={search_term_string}",
        "query-input": "required name=search_term_string"
      },
      "url": "https:\/\/wtflex.in"
    }
  </script>
</div>
<!-- END sections: header-group -->
<script src="//wtflex.in/cdn/shop/t/81/assets/cart-drawer.js?v=169981311261118214701730879288" defer="defer"></script><!-- Kwikpass script to add kwikpass button in the header - [Starts] -->
  <script>
  function getCustomerId() {
    
    return null
    
  }
  
  function getThemeId() {
    
    return 139942133926;
    
  }
  
  // This script will change for every merchant

  const loader = `<svg
    class="loader kploader"
    width="17"
    height="16"
    viewBox="0 0 17 16"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
  >
  <path
    d="M8.50004 1.33325V3.99992M8.50004 11.9999V14.6666M4.50004 7.99992H1.83337M15.1667 7.99992H12.5M13.219 12.7189L11.3334 10.8333M13.219 3.33321L11.3334 5.21883M3.78109 12.7189L5.66671 10.8333M3.78109 3.33321L5.66671 5.21883"
    stroke="#111"
    stroke-width="1.6"
    stroke-linecap="round"
    stroke-linejoin="round"
  />
  </svg>`
   
   /*removing existing profile(person) icon - person icon is not present in this store*/
   const profileButtonElement = document.querySelector('.header__icons a[href*="/cart"]')

  // defining css and add it to style tag in head
  function appendCss() {
  let css = `
  .loader {
    display: none;
    animation: rotate 1.5s linear infinite;
  }
  @keyframes rotate {
    100% {
      transform: rotate(360deg);
    }
  }
  .kp-disabled-text-color{
    cursor: not-allowed;
  }
  #logout-button-desktop{
    cursor: pointer;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 8px;
    font-size: 14px;
    color: #344054;
    font-style: normal;
    font-weight: 600;
    line-height: 20px;
    width: 100%;
    border-radius: 8px;
    padding: 8px 14px;;
    border: 1px solid var(--gray-300, #d0d5dd);
    background: var(--base-white, #fff);
    box-shadow: 0px 1px 2px 0px rgba(16, 24, 40, 0.05);
  }
  #loggedin-icons{
    align-self: center;
    display: none;
    margin-left: -4rem;
  }
  #kwikpass-drawer-desktop,#kwikpass-drawer-mobile{
    padding: 16px;
    display: none;
    right: 0%;
    width: 17.5rem;
    position: absolute;
    top: 120%;
    box-shadow: 0px 0px 32px 0px rgba(16, 24, 40, 0.32);
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
    z-index: 999;
    background:#fff!important;
  }
  #kwikpass-drawer-desktop > ul , #kwikpass-drawer-mobile > ul {
    margin: 0px 0px 10px 0px;
    padding: 0;
    width: 100%;
  }
  #kwikpass-drawer-desktop >ul >a , #kwikpass-drawer-mobile > ul > a {
    cursor: pointer;
    width: 100%;
    display: flex!important;
    justify-content: space-between;
    align-items: baseline;
    padding: 0;
    color: inherit;
    margin-left:0!important;
    text-decoration: none;
  }
  #kwikpass-drawer-desktop >ul >a:hover , #kwikpass-drawer-mobile > ul > a:hover , #kwikpass-drawer-desktop >ul >a:focus , #kwikpass-drawer-mobile > ul > a:focus {
    text-decoration: none;
  }
  #kwikpass-drawer-desktop >ul >a:focus , #kwikpass-drawer-mobile > ul > a:focus,#kwikpass-drawer-desktop >ul >a:active , #kwikpass-drawer-mobile > ul > a:active {
    text-decoration: none;
  }
  #kwikpass-drawer-desktop >ul >a:focus .loader , #kwikpass-drawer-mobile > ul > a:focus .loader {
    display: block;
  }
  #kwikpass-drawer-desktop >ul >a:not(:focus) .loader , #kwikpass-drawer-mobile > ul > a:not(:focus) .loader {
    display: none;
  } 
  #kwikpass-drawer-desktop > ul > a > p , #kwikpass-drawer-mobile > ul > a > p {
    font-size: 14px;
    font-style: normal;
    font-weight: 500;
    line-height: 142.857%;
    display: inline-flex;
    gap: 8px;
    align-items: center;
    margin: 10px 0 10px 0;
    color: #000;
  }
  .header--icon{
    cursor: pointer;
    position: relative;
    display: inline-flex;
    color: #fff;
  }
  path#svgkp-path {
    stroke-width: 0.1;
  }
  #icon-close-kwikpass{
    display: none;
    border-radius: 50px;
    border: 1px solid;
    margin: 0;
    padding: 2px;
    align-items: center;
    justify-content: center;
  }
  svg.loader.kploader {
    padding: 0;
    width: 18px;
    height: 18px;
    border: none;
  }
  
  `;

    var style = document.createElement('style');
    style.innerHTML = css;
    document.getElementsByTagName('head')[0].appendChild(style);
  }

  // function call to append css to style tag
  appendCss() 
  // existing user icon to show in the header
  // TODO : fetch user icon form backend
  const userIcon = `<svg width="23" height="23" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg" id="svgkp">
      <path d="M22.9129 12.935L13.7571 23.0474C13.5348 23.2929 13.1284 23.1084 13.1669 22.7794L14.0816 14.9731H10.6991C10.4034 14.9731 10.2484 14.6219 10.4478 14.4035L20.3133 3.59739C20.5589 3.32834 20.9984 3.58134 20.8891 3.92887L18.2354 12.3664H22.6607C22.9557 12.3664 23.1109 12.7163 22.9129 12.935Z" fill="#FEA203"/>
      <path id="svgkp-path" fill-rule="evenodd" clip-rule="evenodd" d="M16.6079 5.35819C16.4805 5.1933 16.3421 5.03582 16.1932 4.8869C15.2702 3.96387 14.0183 3.44531 12.7129 3.44531C11.4075 3.44531 10.1556 3.96387 9.2326 4.8869C8.30957 5.80993 7.79102 7.06183 7.79102 8.36719C7.79102 9.67255 8.30957 10.9244 9.2326 11.8475C9.48368 12.0986 9.75909 12.3197 10.0533 12.5086L11.0235 11.4503C10.7335 11.2914 10.4649 11.0911 10.227 10.8531C9.56766 10.1938 9.19727 9.29959 9.19727 8.36719C9.19727 7.43479 9.56766 6.54057 10.227 5.88127C10.8863 5.22196 11.7805 4.85156 12.7129 4.85156C13.6453 4.85156 14.5395 5.22196 15.1988 5.88127C15.3636 6.04604 15.5103 6.22549 15.6377 6.41654L16.6079 5.35819ZM20.6413 18.6497L19.6746 19.7132C20.1676 20.4122 20.4473 21.2264 20.4473 22.0781V23.8359C20.4473 24.2243 20.7621 24.5391 21.1504 24.5391C21.5387 24.5391 21.8535 24.2243 21.8535 23.8359V22.0781C21.8535 20.7863 21.4016 19.6103 20.6413 18.6497ZM12.3111 17.5078H10.3026C7.27113 17.5078 4.97852 19.6394 4.97852 22.0781V23.8359C4.97852 24.2243 4.66372 24.5391 4.27539 24.5391C3.88707 24.5391 3.57227 24.2243 3.57227 23.8359V22.0781C3.57227 18.6922 6.67684 16.1016 10.3026 16.1016H12.4885L12.3111 17.5078Z" fill="black" stroke="black"/>
      </svg>`;

 // kwikpass icon for desktop - if user is not logged in
 const KwikpassNotLoggedIcon = `<div id="kp-login-button-header-logo" style="margin-left:-4rem;cursor: pointer;display: flex;align-items: center;">${userIcon}</div>`

 // dropdown for desktop (opens on clicking kwikpass icon if user logged in)
 const drawerhtmlDesktop = `<div id="kwikpass-drawer-desktop">
  <ul>
    <a href="/account" style=" display: flex">
    <p>
       <svg
        width="20"
        height="20"
        viewBox="0 0 20 20"
        fill="none"
        xmlns="http://www.w3.org/2000/svg" 
         >
        <path
        d="M4.6 2.20033L3.3 3.93366C3.04251 4.27697 2.91377 4.44863 2.91676 4.59232C2.91936 4.71736 2.97799 4.83462 3.07646 4.91172C3.18962 5.00032 3.40419 5.00032 3.83333 5.00032H16.1667C16.5958 5.00032 16.8104 5.00032 16.9235 4.91172C17.022 4.83462 17.0806 4.71736 17.0832 4.59232C17.0862 4.44863 16.9575 4.27697 16.7 3.93366L15.4 2.20033M4.6 2.20033C4.74667 2.00477 4.82 1.90699 4.91294 1.83647C4.99525 1.77401 5.08846 1.72741 5.18782 1.69903C5.3 1.66699 5.42222 1.66699 5.66667 1.66699H14.3333C14.5778 1.66699 14.7 1.66699 14.8122 1.69903C14.9115 1.72741 15.0047 1.77401 15.0871 1.83647C15.18 1.90699 15.2533 2.00477 15.4 2.20033M4.6 2.20033L3.03333 4.28921C2.83545 4.55306 2.73651 4.68498 2.66625 4.83026C2.6039 4.95917 2.55843 5.09559 2.53096 5.23612C2.5 5.3945 2.5 5.55941 2.5 5.88921L2.5 15.667C2.5 16.6004 2.5 17.0671 2.68166 17.4236C2.84144 17.7372 3.09641 17.9922 3.41002 18.152C3.76654 18.3337 4.23325 18.3337 5.16667 18.3337L14.8333 18.3337C15.7668 18.3337 16.2335 18.3337 16.59 18.152C16.9036 17.9922 17.1586 17.7372 17.3183 17.4236C17.5 17.0671 17.5 16.6004 17.5 15.667V5.88921C17.5 5.55941 17.5 5.3945 17.469 5.23613C17.4416 5.09559 17.3961 4.95918 17.3338 4.83026C17.2635 4.68498 17.1646 4.55306 16.9667 4.28921L15.4 2.20033M13.3333 8.33366C13.3333 9.21771 12.9821 10.0656 12.357 10.6907C11.7319 11.3158 10.8841 11.667 10 11.667C9.11594 11.667 8.2681 11.3158 7.64298 10.6907C7.01786 10.0656 6.66667 9.21771 6.66667 8.33366"
        stroke="black"
        stroke-width="1.66667"
        stroke-linecap="round"
        stroke-linejoin="round"
        fill="none"
      />
       </svg>
       Order History
    </p>
  
  ${loader}
    </a>
  </ul>
    <button id="logout-button-desktop">
      Logout
        <svg
          width="20"
          height="20"
          viewBox="0 0 20 20"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
          d="M15 6.66667L18.3334 10M18.3334 10L15 13.3333M18.3334 10H7.50002M12.5 3.50337C11.4377 2.86523 10.2044 2.5 8.88891 2.5C4.90019 2.5 1.66669 5.85786 1.66669 10C1.66669 14.1421 4.90019 17.5 8.88891 17.5C10.2044 17.5 11.4377 17.1348 12.5 16.4966"
          stroke="black"
          stroke-width="1.66667"
          stroke-linecap="round"
          stroke-linejoin="round"
          fill="none"
        />
      </svg>
    </button>
  </div>`;
    
  const kwikpassLoggedInIcon = `
  <div id="loggedin-icons" >
    <div id="icon-close-kwikpass" class="icon-close-kwikpass" style="height: 23px; width:23px; cursor: pointer;" onclick="handleDrawer1()">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M18 6L6 18M6 6L18 18" stroke="black" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
       </div>
      <div style="cursor: pointer;display: flex;" onclick="handleDrawer1()" id="icon-kwikpass">
      ${userIcon}
     </div>
  </div>`;


  // It will change based on theme
  const personIconElement = document.querySelector('.header__icons a[href*="/cart"]')
  const html = `
    ${KwikpassNotLoggedIcon}
    ${kwikpassLoggedInIcon} 
    ${drawerhtmlDesktop}
  `;

  if(!document.getElementsByClassName("header--icon")?.[0]){
    const kwipassDesktopNode = document.createElement('div')
    kwipassDesktopNode.className="header--icon"
    kwipassDesktopNode.innerHTML = html
    personIconElement.before(kwipassDesktopNode)
  }
</script>
<!-- Kwikpass script to add kwikpass button in the header - [Ends] -->
    <main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
      <div id="shopify-section-template--17607317717158__home_banner_B9aEJc" class="shopify-section">

<style>
  .banner-container {
    display: none;
    position: relative;
    width: 100%;
    overflow: hidden!important;
    margin: 0 auto;
    margin-top: -7rem!important;
  }
  .banner-container img {
    width: 100%;
    height: auto;
    transition: all 0.2s ease;
  }
  @media (min-width: 749px) {
    .banner-container {
      display: block !important;
      overflow: hidden!important;
      width: 100%;
      height: 100vh;
    }
    .banner-container > img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  }
  /* .video-container {
    display: none;
    position: relative;
    width: 100%;
    margin: 0 auto;
    margin-top: -7rem!important;
  }
  .video-container video {
    width: 100%;
    height: auto;
  }
  @media(max-width: 799px) {
    .video-container {
      display: block!important;
      width: 100%;
      height: 98vh;
    }
    .video-container > video {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  } */
</style>

<div class="banner-container">
  <img
    id="scrollImage1"
    src="https://cdn.shopify.com/s/files/1/0615/4551/3126/files/WhatsApp_Image_2025-01-27_at_20.14.24.jpg?v=1738071003"
    loading="lazy"
    alt="Banner Image"
  >
  <a class="shop-all-button" href="/collections/all-products">Shop All</a>
</div>



<!-- <script>
  window.addEventListener('scroll', function() {
    const scrollPosition = window.scrollY;
    const incrementFactor = 0.04;

    const maxScale = 1.2;

    const newScale = 1 + scrollPosition * incrementFactor / 100;
    const scaledImage = Math.min(maxScale, newScale);

    const image1 = document.getElementById('scrollImage1');
    image1.style.transform = `scale(${scaledImage})`;
  });
</script> --></div><section id="shopify-section-template--17607317717158__slideshow_ERP76m" class="shopify-section section"><link href="//wtflex.in/cdn/shop/t/81/assets/section-image-banner.css?v=27558833901282150661730879288" rel="stylesheet" type="text/css" media="all" />
<link href="//wtflex.in/cdn/shop/t/81/assets/component-slider.css?v=102883555868012287761730879288" rel="stylesheet" type="text/css" media="all" />
<link href="//wtflex.in/cdn/shop/t/81/assets/component-slideshow.css?v=170654395204511176521730879288" rel="stylesheet" type="text/css" media="all" />
<slideshow-component
  class="slider-mobile-gutter"
  role="region"
  aria-roledescription="Carousel"
  aria-label="Slideshow about our brand"
><div class="slideshow__controls slideshow__controls--top slider-buttons">
      <button
        type="button"
        class="slider-button slider-button--prev"
        name="previous"
        aria-label="Previous slide"
        aria-controls="Slider-template--17607317717158__slideshow_ERP76m"
      >
        <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

      </button>
      <div class="slider-counter slider-counter--dots"><div class="slideshow__control-wrapper"><button
                class="slider-counter__link slider-counter__link--dots link"
                aria-label="Load slide 1 of 2"
                aria-controls="Slider-template--17607317717158__slideshow_ERP76m"
              ><span class="dot"></span></button><button
                class="slider-counter__link slider-counter__link--dots link"
                aria-label="Load slide 2 of 2"
                aria-controls="Slider-template--17607317717158__slideshow_ERP76m"
              ><span class="dot"></span></button></div></div>
      <button
        type="button"
        class="slider-button slider-button--next"
        name="next"
        aria-label="Next slide"
        aria-controls="Slider-template--17607317717158__slideshow_ERP76m"
      >
        <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

      </button><button
          type="button"
          class="slideshow__autoplay slider-button"
          aria-label="Pause slideshow"
        ><svg
  class="icon icon-pause"
  viewBox="0 0 8 12"
  fill="none"
  xmlns="http://www.w3.org/2000/svg"
  focusable="false"
  aria-hidden="true"
>
  <path d="M1.2 0.75C0.813401 0.75 0.5 0.985051 0.5 1.275V10.725C0.5 11.0149 0.813401 11.25 1.2 11.25C1.5866 11.25 1.9 11.0149 1.9 10.725V1.275C1.9 0.985051 1.5866 0.75 1.2 0.75Z" fill="currentColor"/>
  <path d="M6.8 0.75C6.4134 0.75 6.1 0.985051 6.1 1.275V10.725C6.1 11.0149 6.4134 11.25 6.8 11.25C7.1866 11.25 7.5 11.0149 7.5 10.725V1.275C7.5 0.985051 7.1866 0.75 6.8 0.75Z" fill="currentColor"/>
</svg>
<svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-play"
  fill="none"
  viewBox="0 0 10 14"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M1.48177 0.814643C0.81532 0.448245 0 0.930414 0 1.69094V12.2081C0 12.991 0.858787 13.4702 1.52503 13.0592L10.5398 7.49813C11.1918 7.09588 11.1679 6.13985 10.4965 5.77075L1.48177 0.814643Z" fill="currentColor"/>
</svg>
</button></div><div
    class="slideshow banner banner--large grid grid--1-col slider slider--everywhere scroll-trigger animate--fade-in"
    id="Slider-template--17607317717158__slideshow_ERP76m"
    aria-live="polite"
    aria-atomic="true"
    data-autoplay="true"
    data-speed="5"
  ><style>
        #Slide-template--17607317717158__slideshow_ERP76m-1 .banner__media::after {
          opacity: 0.0;
        }
      </style>
      <div
        class="slideshow__slide grid__item grid--1-col slider__slide"
        id="Slide-template--17607317717158__slideshow_ERP76m-1"
        
        role="group"
        aria-roledescription="Slide"
        aria-label="1 of 2"
        tabindex="-1"
      >
        <a href="/collections/wtf-exclusives" class="slideshow__media banner__media media">
              <img src="//wtflex.in/cdn/shop/files/Streetwear_Denim_Jacket_and_Jeans_Home.jpg?v=1737820412&amp;width=3840" alt="Denim, Jeans, Jacket, Streetwear" srcset="//wtflex.in/cdn/shop/files/Streetwear_Denim_Jacket_and_Jeans_Home.jpg?v=1737820412&amp;width=375 375w, //wtflex.in/cdn/shop/files/Streetwear_Denim_Jacket_and_Jeans_Home.jpg?v=1737820412&amp;width=550 550w, //wtflex.in/cdn/shop/files/Streetwear_Denim_Jacket_and_Jeans_Home.jpg?v=1737820412&amp;width=750 750w, //wtflex.in/cdn/shop/files/Streetwear_Denim_Jacket_and_Jeans_Home.jpg?v=1737820412&amp;width=1100 1100w, //wtflex.in/cdn/shop/files/Streetwear_Denim_Jacket_and_Jeans_Home.jpg?v=1737820412&amp;width=1500 1500w, //wtflex.in/cdn/shop/files/Streetwear_Denim_Jacket_and_Jeans_Home.jpg?v=1737820412&amp;width=1780 1780w, //wtflex.in/cdn/shop/files/Streetwear_Denim_Jacket_and_Jeans_Home.jpg?v=1737820412&amp;width=2000 2000w, //wtflex.in/cdn/shop/files/Streetwear_Denim_Jacket_and_Jeans_Home.jpg?v=1737820412&amp;width=3000 3000w, //wtflex.in/cdn/shop/files/Streetwear_Denim_Jacket_and_Jeans_Home.jpg?v=1737820412&amp;width=3840 3840w" height="1350" sizes="100vw" fetchpriority="auto">
</a>
        <a href="/collections/wtf-exclusives" class="slideshow__text-wrapper banner__content banner__content--middle-center page-width banner--desktop-transparent scroll-trigger animate--slide-in">
          <div class="slideshow__text banner__box content-container content-container--full-width-mobile color-scheme-1 gradient slideshow__text--center slideshow__text-mobile--center"></div>
        </a>
      </div><style>
        #Slide-template--17607317717158__slideshow_ERP76m-2 .banner__media::after {
          opacity: 0.0;
        }
      </style>
      <div
        class="slideshow__slide grid__item grid--1-col slider__slide"
        id="Slide-template--17607317717158__slideshow_ERP76m-2"
        
        role="group"
        aria-roledescription="Slide"
        aria-label="2 of 2"
        tabindex="-1"
      >
        <a href="/collections/basics-t-shirts" class="slideshow__media banner__media media"><img src="//wtflex.in/cdn/shop/files/Snapinsta.app_452627513_18358487149106795_7723944399216998663_n_1080.jpg?v=1724771189&amp;width=3840" alt="" srcset="//wtflex.in/cdn/shop/files/Snapinsta.app_452627513_18358487149106795_7723944399216998663_n_1080.jpg?v=1724771189&amp;width=375 375w, //wtflex.in/cdn/shop/files/Snapinsta.app_452627513_18358487149106795_7723944399216998663_n_1080.jpg?v=1724771189&amp;width=550 550w, //wtflex.in/cdn/shop/files/Snapinsta.app_452627513_18358487149106795_7723944399216998663_n_1080.jpg?v=1724771189&amp;width=750 750w, //wtflex.in/cdn/shop/files/Snapinsta.app_452627513_18358487149106795_7723944399216998663_n_1080.jpg?v=1724771189&amp;width=1100 1100w, //wtflex.in/cdn/shop/files/Snapinsta.app_452627513_18358487149106795_7723944399216998663_n_1080.jpg?v=1724771189&amp;width=1500 1500w, //wtflex.in/cdn/shop/files/Snapinsta.app_452627513_18358487149106795_7723944399216998663_n_1080.jpg?v=1724771189&amp;width=1780 1780w, //wtflex.in/cdn/shop/files/Snapinsta.app_452627513_18358487149106795_7723944399216998663_n_1080.jpg?v=1724771189&amp;width=2000 2000w, //wtflex.in/cdn/shop/files/Snapinsta.app_452627513_18358487149106795_7723944399216998663_n_1080.jpg?v=1724771189&amp;width=3000 3000w, //wtflex.in/cdn/shop/files/Snapinsta.app_452627513_18358487149106795_7723944399216998663_n_1080.jpg?v=1724771189&amp;width=3840 3840w" height="1350" loading="lazy" sizes="100vw">
</a>
        <a href="/collections/basics-t-shirts" class="slideshow__text-wrapper banner__content banner__content--middle-center page-width banner--desktop-transparent">
          <div class="slideshow__text banner__box content-container content-container--full-width-mobile color-scheme-1 gradient slideshow__text--center slideshow__text-mobile--center"></div>
        </a>
      </div></div></slideshow-component>
<style> @media screen and (min-width: 749px) {#shopify-section-template--17607317717158__slideshow_ERP76m slideshow-component {display: none; }} #shopify-section-template--17607317717158__slideshow_ERP76m .slideshow__autoplay {display: none;} </style></section><div id="shopify-section-template--17607317717158__circle_categories_iHhacw" class="shopify-section">




<div class="circle-container">
  <div class="circle-item">
    <a href="/collections/winter-essentials">
      <div class="circle-img circleCat4" style="background-image: url('//wtflex.in/cdn/shop/files/Winter_Essentials_category_icon_44b20eb5-4fcc-4c35-bcc4-637478d9b967_medium.png?v=1705670761');"></div>
      <h4 class="circle-text">Winter Essentials</h4>
    </a>
  </div>
  
  <div class="circle-item">
    <a href="/collections/oversized-t-shirt">
      <div class="circle-img circleCat1" style="background-image: url('//wtflex.in/cdn/shop/files/Heavyweight_Tshirt_Category_Icon_ea45b36c-8b60-4a27-b191-b2188aace4dc_medium.jpg?v=1698761005');"></div>
      <h4 class="circle-text">Oversized T-shirt</h4>
    </a>
  </div>
  <div class="circle-item">
    <a href="/collections/the-bottom-trends">
      <div class="circle-img circleCat2" style="background-image: url('//wtflex.in/cdn/shop/files/Cargo_Pants_Category_icon_dbb7537a-3f58-445e-8b38-ca10f9d391c7_medium.jpg?v=1698761006');"></div>
      <h4 class="circle-text">The Bottom Trends</h4>
    </a>
  </div>
  <div class="circle-item">
    <a href="/collections/bowling-shirts">
      <div class="circle-img circleCat3" style="background-image: url('//wtflex.in/cdn/shop/files/Bowling_Shirt_Category_Icon_e66c2c3a-37ea-4199-8150-01763ab2765d_medium.jpg?v=1698761005');"></div>
      <h4 class="circle-text">Bowling Shirts</h4>
    </a>
  </div>  
  <div class="circle-item">
    <a href="/collections/denims-by-wtf">
      <div class="circle-img circleCat5" style="background-image: url('//wtflex.in/cdn/shop/files/Denims_e694744e-3361-4e39-acf9-cf02294a7c3f_medium.png?v=1738128982');"></div>
      <h4 class="circle-text">Denims by WTF</h4>
    </a>
  </div>  
  
  <div class="circle-item">
    <a href="/collections/wtf-x-zostel">
      <div class="circle-img circleCat6" style="background-image: url('//wtflex.in/cdn/shop/files/zostek-removebg-preview_medium.png?v=1695028292');"></div>
      <h4 class="circle-text">Zostel</h4>
    </a>
  </div>
    
</div>
<div class="circle-controls">
  <div class="left-arrow controller">
    <img style="transform: rotate(180deg);" src="https://cdn.shopify.com/s/files/1/0615/4551/3126/files/Chevron_Icon_100.png" alt="circled-chevron-right"/>
  </div>
  <div class="right-arrow controller">
    <img style="transform: rotate(0deg);" src="https://cdn.shopify.com/s/files/1/0615/4551/3126/files/Chevron_Icon_100.png" alt="circled-chevron-right"/>
  </div>
</div>


</div><section id="shopify-section-template--17607317717158__filter_collection_qVGq7B" class="shopify-section section"><link href="//wtflex.in/cdn/shop/t/81/assets/component-card.css?v=165197172554000981641730879288" rel="stylesheet" type="text/css" media="all" />
<link href="//wtflex.in/cdn/shop/t/81/assets/component-price.css?v=42108041875070243851730879288" rel="stylesheet" type="text/css" media="all" />

<link href="//wtflex.in/cdn/shop/t/81/assets/component-slider.css?v=102883555868012287761730879288" rel="stylesheet" type="text/css" media="all" />
<link href="//wtflex.in/cdn/shop/t/81/assets/template-collection.css?v=134407768395003416811730879288" rel="stylesheet" type="text/css" media="all" />

<style data-shopify>.section-template--17607317717158__filter_collection_qVGq7B-padding {
    padding-top: 27px;
    padding-bottom: 27px;
  }
  .upper-category-line {
    display: flex;
    gap: 0.6rem;
    color: black;
    overflow-x: auto;
  }
  .upper-category-line {
    -ms-overflow-style: none;
    scrollbar-width: none;
  }
  .upper-category-line::-webkit-scrollbar {
      display: none;
  }
  .upper-category-line button {
    padding: 0.6rem 1.2rem;
    background: #f6f6f6;
    border: 0;
    text-transform: uppercase;
    border-radius: 6px;
    text-wrap: nowrap;
    cursor: pointer;
    font-size: 12px;
    color: black; /* Ensure text color is black */
    -webkit-appearance: none; /* Remove default styling on iOS */
    appearance: none; /* Remove default styling on other browsers */
  }
  .upper-category-line button.active {
    background-color: #000;
    color: #fff;
  }
  .filter-loader {
    display: block;
    padding: 20px;
    width: 100%;
  }
  .loaderGif {
    width: 2.5rem;
    margin-left: auto;
    margin-right: auto;
    display: flex;
        mix-blend-mode: darken;
  }
  .addedViewBtn{
    /* display: none; */
  }
  @media screen and (min-width: 750px) {
    .section-template--17607317717158__filter_collection_qVGq7B-padding {
      padding-top: 36px;
      padding-bottom: 36px;
    }
  }</style><div
  class="color-scheme-1 isolate gradient"
>
  <div
    class="collection section-template--17607317717158__filter_collection_qVGq7B-padding"
    id="collection-template--17607317717158__filter_collection_qVGq7B"
    data-id="template--17607317717158__filter_collection_qVGq7B"
  >
    <div class="filterTitle collection__title title-wrapper title-wrapper--no-top-margin page-width"><h2 class="title inline-richtext h2 scroll-trigger animate--slide-in">
          FEATURED PRODUCTS
        </h2></div>

    
    
    <div class="upper-category-line page-width">
      
        
        <button
          data-collection-handle="all-products"
          class="active"
        >
          FEATURED
        </button>
      
        
        <button
          data-collection-handle="oversized-t-shirt"
          class=""
        >
          Oversized
        </button>
      
        
        <button
          data-collection-handle="varsity-jacket"
          class=""
        >
          Varsity
        </button>
      
        
        <button
          data-collection-handle="the-bottom-trends"
          class=""
        >
          Bottom Trends
        </button>
      
        
        <button
          data-collection-handle="heavyweight-t-shirt"
          class=""
        >
          Heavyweight
        </button>
      
    </div>

    <slider-component class="slider-mobile-gutter page-width page-width-desktop scroll-trigger animate--slide-in">
      <ul
        id="Slider-template--17607317717158__filter_collection_qVGq7B"
        data-id="template--17607317717158__filter_collection_qVGq7B"
        class="grid product-grid contains-card contains-card--product contains-card--standard grid--4-col-desktop grid--2-col-tablet-down"
        role="list"
        style="background: #f6f6f6"
        aria-label="Slider"
      >
        
<li
            id="Slide-template--17607317717158__filter_collection_qVGq7B-1"
            class="grid__item scroll-trigger animate--slide-in"
            
              data-cascade
              style="--animation-order: 1;"
            
          >
            
<style>
  .system-font{
  font-family: var(--font-heading-family)!important;
    font-size: 1.2rem!important;
  }
</style><link href="//wtflex.in/cdn/shop/t/81/assets/component-rating.css?v=179577762467860590411730879288" rel="stylesheet" type="text/css" media="all" />
  <link href="//wtflex.in/cdn/shop/t/81/assets/component-volume-pricing.css?v=111870094811454961941730879288" rel="stylesheet" type="text/css" media="all" />

  <link href="//wtflex.in/cdn/shop/t/81/assets/component-price.css?v=42108041875070243851730879288" rel="stylesheet" type="text/css" media="all" />
  <link href="//wtflex.in/cdn/shop/t/81/assets/quick-order-list.css?v=38387008350345892421730879288" rel="stylesheet" type="text/css" media="all" />
  <link href="//wtflex.in/cdn/shop/t/81/assets/quantity-popover.css?v=78745769908715669131730879288" rel="stylesheet" type="text/css" media="all" />
<div class="card-wrapper product-card-wrapper underline-links-hover">
    <div
      class="
        card card--standard
         card--media
        
        
        
        
        
      "
      style="--ratio-percent: 125.0%;"
    >
      <div
        class="card__inner color-scheme-2 gradient ratio"
        style="--ratio-percent: 125.0%;"
      ><div class="card__media">
            <div class="media media--transparent media--hover-effect">
              
              <img
                srcset="//wtflex.in/cdn/shop/files/youngforeverwebsitepostback-min.png?v=1734525607&width=165 165w,//wtflex.in/cdn/shop/files/youngforeverwebsitepostback-min.png?v=1734525607&width=360 360w,//wtflex.in/cdn/shop/files/youngforeverwebsitepostback-min.png?v=1734525607&width=533 533w,//wtflex.in/cdn/shop/files/youngforeverwebsitepostback-min.png?v=1734525607&width=720 720w,//wtflex.in/cdn/shop/files/youngforeverwebsitepostback-min.png?v=1734525607&width=940 940w,//wtflex.in/cdn/shop/files/youngforeverwebsitepostback-min.png?v=1734525607&width=1066 1066w,//wtflex.in/cdn/shop/files/youngforeverwebsitepostback-min.png?v=1734525607 1080w
                "
                src="//wtflex.in/cdn/shop/files/youngforeverwebsitepostback-min.png?v=1734525607&width=533"
                sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                alt="YOUNG FOREVER Varsity Jacket"
                class="motion-reduce"
                
                  loading="lazy"
                
                width="1080"
                height="1350"
              >
              
<img
                  srcset="//wtflex.in/cdn/shop/files/youngforeverwebsitepost-min.png?v=1734525607&width=165 165w,//wtflex.in/cdn/shop/files/youngforeverwebsitepost-min.png?v=1734525607&width=360 360w,//wtflex.in/cdn/shop/files/youngforeverwebsitepost-min.png?v=1734525607&width=533 533w,//wtflex.in/cdn/shop/files/youngforeverwebsitepost-min.png?v=1734525607&width=720 720w,//wtflex.in/cdn/shop/files/youngforeverwebsitepost-min.png?v=1734525607&width=940 940w,//wtflex.in/cdn/shop/files/youngforeverwebsitepost-min.png?v=1734525607&width=1066 1066w,//wtflex.in/cdn/shop/files/youngforeverwebsitepost-min.png?v=1734525607 1080w
                  "
                  src="//wtflex.in/cdn/shop/files/youngforeverwebsitepost-min.png?v=1734525607&width=533"
                  sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                  alt=""
                  class="motion-reduce"
                  loading="lazy"
                  width="1080"
                  height="1350"
                ></div>
          </div><div class="card__content">
          <div class="card__information">
            <h3
              class="card__heading system-font"
              
            >
              <a
                href="/products/young-forever-varsity-jacket-1"
                data-sound="true"
                id="StandardCardNoMediaLink-template--17607317717158__filter_collection_qVGq7B-8359839826086"
                class="full-unstyled-link"

                aria-labelledby="StandardCardNoMediaLink-template--17607317717158__filter_collection_qVGq7B-8359839826086 NoMediaStandardBadge-template--17607317717158__filter_collection_qVGq7B-8359839826086"
              >
                YOUNG FOREVER Varsity Jacket
              </a>
            </h3>
          </div>
          
          <div class="card__badge bottom left">
</div>
          
        </div>
      </div>
      <div class="card__content">
        <div class="card__information">
          <h3
            class="card__heading system-font h5"
            
              id="title-template--17607317717158__filter_collection_qVGq7B-8359839826086"
            
          >
            <a
              href="/products/young-forever-varsity-jacket-1"
              id="CardLink-template--17607317717158__filter_collection_qVGq7B-8359839826086"
              class="full-unstyled-link"
              data-sound="true"
              aria-labelledby="CardLink-template--17607317717158__filter_collection_qVGq7B-8359839826086 Badge-template--17607317717158__filter_collection_qVGq7B-8359839826086"
            >
              YOUNG FOREVER Varsity Jacket
            </a>
          </h3>
          <div class="card-information"><span class="caption-large light"></span>
<div
    class="
      price  price--on-sale"
  >
    <div class="price__container"><div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span class="price-item price-item--regular">
            ₹ 2,699.00
          </span></div>
      <div class="price__sale">
          <span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span>
            <s class="price-item price-item--regular">
              
                ₹ 3,299.00
              
            </s>
          </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
        <span class="price-item price-item--sale price-item--last">
          ₹ 2,699.00
        </span>
      </div>
      <small class="unit-price caption hidden">
        <span class="visually-hidden">Unit price</span>
        <span class="price-item price-item--last">
          <span></span>
          <span aria-hidden="true">/</span>
          <span class="visually-hidden">&nbsp;per&nbsp;</span>
          <span>
          </span>
        </span>
      </small>
    </div></div>


            <div class="pop-club-listing" price="2699.00" prodId="8359839826086"></div></div>
        </div>
        
        
        <div class="card__badge bottom left"><span
              id="Badge-template--17607317717158__filter_collection_qVGq7B-8359839826086"
              class="badge badge--bottom-left color-scheme-4"
            >Sale</span></div>
      </div>
    </div>
  </div>
          </li><li
            id="Slide-template--17607317717158__filter_collection_qVGq7B-2"
            class="grid__item scroll-trigger animate--slide-in"
            
              data-cascade
              style="--animation-order: 2;"
            
          >
            
<style>
  .system-font{
  font-family: var(--font-heading-family)!important;
    font-size: 1.2rem!important;
  }
</style><div class="card-wrapper product-card-wrapper underline-links-hover">
    <div
      class="
        card card--standard
         card--media
        
        
        
        
        
      "
      style="--ratio-percent: 125.0%;"
    >
      <div
        class="card__inner color-scheme-2 gradient ratio"
        style="--ratio-percent: 125.0%;"
      ><div class="card__media">
            <div class="media media--transparent media--hover-effect">
              
              <img
                srcset="//wtflex.in/cdn/shop/files/DII2.png?v=1685026287&width=165 165w,//wtflex.in/cdn/shop/files/DII2.png?v=1685026287&width=360 360w,//wtflex.in/cdn/shop/files/DII2.png?v=1685026287&width=533 533w,//wtflex.in/cdn/shop/files/DII2.png?v=1685026287&width=720 720w,//wtflex.in/cdn/shop/files/DII2.png?v=1685026287&width=940 940w,//wtflex.in/cdn/shop/files/DII2.png?v=1685026287&width=1066 1066w,//wtflex.in/cdn/shop/files/DII2.png?v=1685026287 1080w
                "
                src="//wtflex.in/cdn/shop/files/DII2.png?v=1685026287&width=533"
                sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                alt="varsity jacket black and white , varsity jacket original , varsity jackets , varsity jacket for boys , varsity jacket for men"
                class="motion-reduce"
                
                  loading="lazy"
                
                width="1080"
                height="1350"
              >
              
<img
                  srcset="//wtflex.in/cdn/shop/files/DIDIIMAGINE1.png?v=1685026287&width=165 165w,//wtflex.in/cdn/shop/files/DIDIIMAGINE1.png?v=1685026287&width=360 360w,//wtflex.in/cdn/shop/files/DIDIIMAGINE1.png?v=1685026287&width=533 533w,//wtflex.in/cdn/shop/files/DIDIIMAGINE1.png?v=1685026287&width=720 720w,//wtflex.in/cdn/shop/files/DIDIIMAGINE1.png?v=1685026287&width=940 940w,//wtflex.in/cdn/shop/files/DIDIIMAGINE1.png?v=1685026287&width=1066 1066w,//wtflex.in/cdn/shop/files/DIDIIMAGINE1.png?v=1685026287 1080w
                  "
                  src="//wtflex.in/cdn/shop/files/DIDIIMAGINE1.png?v=1685026287&width=533"
                  sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                  alt=""
                  class="motion-reduce"
                  loading="lazy"
                  width="1080"
                  height="1350"
                ></div>
          </div><div class="card__content">
          <div class="card__information">
            <h3
              class="card__heading system-font"
              
            >
              <a
                href="/products/did-i-imagine-it-varsity-jacket"
                data-sound="true"
                id="StandardCardNoMediaLink-template--17607317717158__filter_collection_qVGq7B-7597717192870"
                class="full-unstyled-link"

                aria-labelledby="StandardCardNoMediaLink-template--17607317717158__filter_collection_qVGq7B-7597717192870 NoMediaStandardBadge-template--17607317717158__filter_collection_qVGq7B-7597717192870"
              >
                DID I IMAGINE IT? VARSITY JACKET
              </a>
            </h3>
          </div>
          
          <div class="card__badge bottom left">
</div>
          
        </div>
      </div>
      <div class="card__content">
        <div class="card__information">
          <h3
            class="card__heading system-font h5"
            
              id="title-template--17607317717158__filter_collection_qVGq7B-7597717192870"
            
          >
            <a
              href="/products/did-i-imagine-it-varsity-jacket"
              id="CardLink-template--17607317717158__filter_collection_qVGq7B-7597717192870"
              class="full-unstyled-link"
              data-sound="true"
              aria-labelledby="CardLink-template--17607317717158__filter_collection_qVGq7B-7597717192870 Badge-template--17607317717158__filter_collection_qVGq7B-7597717192870"
            >
              DID I IMAGINE IT? VARSITY JACKET
            </a>
          </h3>
          <div class="card-information"><span class="caption-large light"></span>
<div
    class="
      price  price--on-sale"
  >
    <div class="price__container"><div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span class="price-item price-item--regular">
            ₹ 2,499.00
          </span></div>
      <div class="price__sale">
          <span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span>
            <s class="price-item price-item--regular">
              
                ₹ 2,999.00
              
            </s>
          </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
        <span class="price-item price-item--sale price-item--last">
          ₹ 2,499.00
        </span>
      </div>
      <small class="unit-price caption hidden">
        <span class="visually-hidden">Unit price</span>
        <span class="price-item price-item--last">
          <span></span>
          <span aria-hidden="true">/</span>
          <span class="visually-hidden">&nbsp;per&nbsp;</span>
          <span>
          </span>
        </span>
      </small>
    </div></div>


            <div class="pop-club-listing" price="2499.00" prodId="7597717192870"></div></div>
        </div>
        
        
        <div class="card__badge bottom left"><span
              id="Badge-template--17607317717158__filter_collection_qVGq7B-7597717192870"
              class="badge badge--bottom-left color-scheme-4"
            >Sale</span></div>
      </div>
    </div>
  </div>
          </li><li
            id="Slide-template--17607317717158__filter_collection_qVGq7B-3"
            class="grid__item scroll-trigger animate--slide-in"
            
              data-cascade
              style="--animation-order: 3;"
            
          >
            
<style>
  .system-font{
  font-family: var(--font-heading-family)!important;
    font-size: 1.2rem!important;
  }
</style><div class="card-wrapper product-card-wrapper underline-links-hover">
    <div
      class="
        card card--standard
         card--media
        
        
        
        
        
      "
      style="--ratio-percent: 125.0%;"
    >
      <div
        class="card__inner color-scheme-2 gradient ratio"
        style="--ratio-percent: 125.0%;"
      ><div class="card__media">
            <div class="media media--transparent media--hover-effect">
              
              <img
                srcset="//wtflex.in/cdn/shop/files/Taketheshotwebsiteback.jpg?v=1737125434&width=165 165w,//wtflex.in/cdn/shop/files/Taketheshotwebsiteback.jpg?v=1737125434&width=360 360w,//wtflex.in/cdn/shop/files/Taketheshotwebsiteback.jpg?v=1737125434&width=533 533w,//wtflex.in/cdn/shop/files/Taketheshotwebsiteback.jpg?v=1737125434&width=720 720w,//wtflex.in/cdn/shop/files/Taketheshotwebsiteback.jpg?v=1737125434&width=940 940w,//wtflex.in/cdn/shop/files/Taketheshotwebsiteback.jpg?v=1737125434&width=1066 1066w,//wtflex.in/cdn/shop/files/Taketheshotwebsiteback.jpg?v=1737125434 1080w
                "
                src="//wtflex.in/cdn/shop/files/Taketheshotwebsiteback.jpg?v=1737125434&width=533"
                sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                alt="TAKE THE SHOT Varsity Jacket"
                class="motion-reduce"
                
                  loading="lazy"
                
                width="1080"
                height="1350"
              >
              
<img
                  srcset="//wtflex.in/cdn/shop/files/Taketheshotwebsitefront.jpg?v=1737125434&width=165 165w,//wtflex.in/cdn/shop/files/Taketheshotwebsitefront.jpg?v=1737125434&width=360 360w,//wtflex.in/cdn/shop/files/Taketheshotwebsitefront.jpg?v=1737125434&width=533 533w,//wtflex.in/cdn/shop/files/Taketheshotwebsitefront.jpg?v=1737125434&width=720 720w,//wtflex.in/cdn/shop/files/Taketheshotwebsitefront.jpg?v=1737125434&width=940 940w,//wtflex.in/cdn/shop/files/Taketheshotwebsitefront.jpg?v=1737125434&width=1066 1066w,//wtflex.in/cdn/shop/files/Taketheshotwebsitefront.jpg?v=1737125434 1080w
                  "
                  src="//wtflex.in/cdn/shop/files/Taketheshotwebsitefront.jpg?v=1737125434&width=533"
                  sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                  alt=""
                  class="motion-reduce"
                  loading="lazy"
                  width="1080"
                  height="1350"
                ></div>
          </div><div class="card__content">
          <div class="card__information">
            <h3
              class="card__heading system-font"
              
            >
              <a
                href="/products/take-the-shot-varsity-jacket"
                data-sound="true"
                id="StandardCardNoMediaLink-template--17607317717158__filter_collection_qVGq7B-8360583397542"
                class="full-unstyled-link"

                aria-labelledby="StandardCardNoMediaLink-template--17607317717158__filter_collection_qVGq7B-8360583397542 NoMediaStandardBadge-template--17607317717158__filter_collection_qVGq7B-8360583397542"
              >
                TAKE THE SHOT Varsity Jacket
              </a>
            </h3>
          </div>
          
          <div class="card__badge bottom left">
</div>
          
        </div>
      </div>
      <div class="card__content">
        <div class="card__information">
          <h3
            class="card__heading system-font h5"
            
              id="title-template--17607317717158__filter_collection_qVGq7B-8360583397542"
            
          >
            <a
              href="/products/take-the-shot-varsity-jacket"
              id="CardLink-template--17607317717158__filter_collection_qVGq7B-8360583397542"
              class="full-unstyled-link"
              data-sound="true"
              aria-labelledby="CardLink-template--17607317717158__filter_collection_qVGq7B-8360583397542 Badge-template--17607317717158__filter_collection_qVGq7B-8360583397542"
            >
              TAKE THE SHOT Varsity Jacket
            </a>
          </h3>
          <div class="card-information"><span class="caption-large light"></span>
<div
    class="
      price  price--on-sale"
  >
    <div class="price__container"><div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span class="price-item price-item--regular">
            ₹ 2,699.00
          </span></div>
      <div class="price__sale">
          <span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span>
            <s class="price-item price-item--regular">
              
                ₹ 3,299.00
              
            </s>
          </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
        <span class="price-item price-item--sale price-item--last">
          ₹ 2,699.00
        </span>
      </div>
      <small class="unit-price caption hidden">
        <span class="visually-hidden">Unit price</span>
        <span class="price-item price-item--last">
          <span></span>
          <span aria-hidden="true">/</span>
          <span class="visually-hidden">&nbsp;per&nbsp;</span>
          <span>
          </span>
        </span>
      </small>
    </div></div>


            <div class="pop-club-listing" price="2699.00" prodId="8360583397542"></div></div>
        </div>
        
        
        <div class="card__badge bottom left"><span
              id="Badge-template--17607317717158__filter_collection_qVGq7B-8360583397542"
              class="badge badge--bottom-left color-scheme-4"
            >Sale</span></div>
      </div>
    </div>
  </div>
          </li><li
            id="Slide-template--17607317717158__filter_collection_qVGq7B-4"
            class="grid__item scroll-trigger animate--slide-in"
            
              data-cascade
              style="--animation-order: 4;"
            
          >
            
<style>
  .system-font{
  font-family: var(--font-heading-family)!important;
    font-size: 1.2rem!important;
  }
</style><div class="card-wrapper product-card-wrapper underline-links-hover">
    <div
      class="
        card card--standard
         card--media
        
        
        
        
        
      "
      style="--ratio-percent: 125.0%;"
    >
      <div
        class="card__inner color-scheme-2 gradient ratio"
        style="--ratio-percent: 125.0%;"
      ><div class="card__media">
            <div class="media media--transparent media--hover-effect">
              
              <img
                srcset="//wtflex.in/cdn/shop/files/Artboard2-13.png?v=1706098386&width=165 165w,//wtflex.in/cdn/shop/files/Artboard2-13.png?v=1706098386&width=360 360w,//wtflex.in/cdn/shop/files/Artboard2-13.png?v=1706098386&width=533 533w,//wtflex.in/cdn/shop/files/Artboard2-13.png?v=1706098386&width=720 720w,//wtflex.in/cdn/shop/files/Artboard2-13.png?v=1706098386&width=940 940w,//wtflex.in/cdn/shop/files/Artboard2-13.png?v=1706098386&width=1066 1066w,//wtflex.in/cdn/shop/files/Artboard2-13.png?v=1706098386 1080w
                "
                src="//wtflex.in/cdn/shop/files/Artboard2-13.png?v=1706098386&width=533"
                sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                alt="Hoodie, Oversized, Relaxed, Comfortable, Design, Winter, Grey"
                class="motion-reduce"
                
                  loading="lazy"
                
                width="1080"
                height="1350"
              >
              
<img
                  srcset="//wtflex.in/cdn/shop/files/Artboard1-13.png?v=1706098386&width=165 165w,//wtflex.in/cdn/shop/files/Artboard1-13.png?v=1706098386&width=360 360w,//wtflex.in/cdn/shop/files/Artboard1-13.png?v=1706098386&width=533 533w,//wtflex.in/cdn/shop/files/Artboard1-13.png?v=1706098386&width=720 720w,//wtflex.in/cdn/shop/files/Artboard1-13.png?v=1706098386&width=940 940w,//wtflex.in/cdn/shop/files/Artboard1-13.png?v=1706098386&width=1066 1066w,//wtflex.in/cdn/shop/files/Artboard1-13.png?v=1706098386 1080w
                  "
                  src="//wtflex.in/cdn/shop/files/Artboard1-13.png?v=1706098386&width=533"
                  sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                  alt=""
                  class="motion-reduce"
                  loading="lazy"
                  width="1080"
                  height="1350"
                ></div>
          </div><div class="card__content">
          <div class="card__information">
            <h3
              class="card__heading system-font"
              
            >
              <a
                href="/products/optimistic-behaviour-oversized-hoodie"
                data-sound="true"
                id="StandardCardNoMediaLink-template--17607317717158__filter_collection_qVGq7B-7907232448678"
                class="full-unstyled-link"

                aria-labelledby="StandardCardNoMediaLink-template--17607317717158__filter_collection_qVGq7B-7907232448678 NoMediaStandardBadge-template--17607317717158__filter_collection_qVGq7B-7907232448678"
              >
                OPTIMISTIC BEHAVIOUR Oversized Hoodie
              </a>
            </h3>
          </div>
          
          <div class="card__badge bottom left">
</div>
          
        </div>
      </div>
      <div class="card__content">
        <div class="card__information">
          <h3
            class="card__heading system-font h5"
            
              id="title-template--17607317717158__filter_collection_qVGq7B-7907232448678"
            
          >
            <a
              href="/products/optimistic-behaviour-oversized-hoodie"
              id="CardLink-template--17607317717158__filter_collection_qVGq7B-7907232448678"
              class="full-unstyled-link"
              data-sound="true"
              aria-labelledby="CardLink-template--17607317717158__filter_collection_qVGq7B-7907232448678 Badge-template--17607317717158__filter_collection_qVGq7B-7907232448678"
            >
              OPTIMISTIC BEHAVIOUR Oversized Hoodie
            </a>
          </h3>
          <div class="card-information"><span class="caption-large light"></span>
<div
    class="
      price  price--on-sale"
  >
    <div class="price__container"><div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span class="price-item price-item--regular">
            ₹ 1,599.00
          </span></div>
      <div class="price__sale">
          <span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span>
            <s class="price-item price-item--regular">
              
                ₹ 2,199.00
              
            </s>
          </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
        <span class="price-item price-item--sale price-item--last">
          ₹ 1,599.00
        </span>
      </div>
      <small class="unit-price caption hidden">
        <span class="visually-hidden">Unit price</span>
        <span class="price-item price-item--last">
          <span></span>
          <span aria-hidden="true">/</span>
          <span class="visually-hidden">&nbsp;per&nbsp;</span>
          <span>
          </span>
        </span>
      </small>
    </div></div>


            <div class="pop-club-listing" price="1599.00" prodId="7907232448678"></div></div>
        </div>
        
        
        <div class="card__badge bottom left"><span
              id="Badge-template--17607317717158__filter_collection_qVGq7B-7907232448678"
              class="badge badge--bottom-left color-scheme-4"
            >Sale</span></div>
      </div>
    </div>
  </div>
          </li></ul></slider-component>

    <div class="center collection__view-all scroll-trigger animate--slide-in">
      <a
        href="/collections/clearance"
        class="addedViewBtn viewAllStyle button"
      >
        View all
      </a>
    </div>

    </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.upper-category-line button');
    const featuredCollectionContainer = document.querySelector('#Slider-template--17607317717158__filter_collection_qVGq7B');
    const loader = document.createElement('div');
    loader.className = 'filter-loader';
    loader.innerHTML =
      '<img src="https://cdn.shopify.com/s/files/1/0615/4551/3126/files/Loading_animated_icons.gif" class="loaderGif" />';

    buttons.forEach((button) => {
      button.addEventListener('click', function () {
        const collectionHandle = this.getAttribute('data-collection-handle');
        const addedViewBtn = document.querySelector('.addedViewBtn');

        buttons.forEach((btn) => btn.classList.remove('active'));
        this.classList.add('active');

        addedViewBtn.href = `/collections/${collectionHandle}`;

        const cacheKey = `collection-${collectionHandle}`;
        const cachedData = JSON.parse(localStorage.getItem(cacheKey));
        const now = new Date().getTime();
        if (cachedData && now - cachedData.timestamp < 1800000) {
          featuredCollectionContainer.innerHTML = cachedData.productsHTML;
          addedViewBtn.style.display = 'inline-flex';
          document.dispatchEvent(new Event('facet:criteria-changed'));
          return;
        }
        featuredCollectionContainer.innerHTML = '';
        featuredCollectionContainer.appendChild(loader);
        addedViewBtn.style.display = 'none';

        fetch(`/collections/${collectionHandle}?view=ajax-products`)
          .then((response) => response.text())
          .then((html) => {
            const parser = new DOMParser();
            const doc = parser.parseFromString(html, 'text/html');
            const productsHTML = doc.querySelector('.product-grid').innerHTML;
            featuredCollectionContainer.innerHTML = productsHTML;
            addedViewBtn.style.display = 'inline-flex';

            localStorage.setItem(
              cacheKey,
              JSON.stringify({
                productsHTML: productsHTML,
                timestamp: now,
              })
            );
          })
          .catch((error) => {
            console.error('Error fetching collection:', error);
            featuredCollectionContainer.innerHTML = 'Failed to load content. Please Reload the page.';
          })
          .finally(() => {
            document.dispatchEvent(new Event('facet:criteria-changed'));
          });
      });
    });
  });
</script>


</section><section id="shopify-section-template--17607317717158__featured_collection_dbkBPm" class="shopify-section section"><link href="//wtflex.in/cdn/shop/t/81/assets/component-card.css?v=165197172554000981641730879288" rel="stylesheet" type="text/css" media="all" />
<link href="//wtflex.in/cdn/shop/t/81/assets/component-price.css?v=42108041875070243851730879288" rel="stylesheet" type="text/css" media="all" />

<link href="//wtflex.in/cdn/shop/t/81/assets/component-slider.css?v=102883555868012287761730879288" rel="stylesheet" type="text/css" media="all" />
<link href="//wtflex.in/cdn/shop/t/81/assets/template-collection.css?v=134407768395003416811730879288" rel="stylesheet" type="text/css" media="all" />

<style data-shopify>.section-template--17607317717158__featured_collection_dbkBPm-padding {
    padding-top: 18px;
    padding-bottom: 18px;
  }
  .viewAllStyle{
    min-height: auto;
    min-width: auto;
    padding: 1rem 3rem;
    text-transform: uppercase;
    font-weight: 500 !important;
    font-size: 11px;
  }

  @media screen and (min-width: 750px) {
    .section-template--17607317717158__featured_collection_dbkBPm-padding {
      padding-top: 24px;
      padding-bottom: 24px;
    }
    .viewAllStyle{
      font-size: 1.3rem;
    }
  }</style><div
  class="color-scheme-1 isolate gradient"
>
  <div
    class="collection section-template--17607317717158__featured_collection_dbkBPm-padding"
    id="collection-template--17607317717158__featured_collection_dbkBPm"
    data-id="template--17607317717158__featured_collection_dbkBPm"
  >
    <div class="collection__title title-wrapper title-wrapper--no-top-margin page-width"><h2 class="closer-text uppercase title inline-richtext h2 scroll-trigger animate--slide-in">
          HEAVYWEIGHT T-SHIRTS
        </h2></div>

    <slider-component class="slider-mobile-gutter page-width page-width-desktop scroll-trigger animate--slide-in">
      <ul
        id="Slider-template--17607317717158__featured_collection_dbkBPm"
        data-id="template--17607317717158__featured_collection_dbkBPm"
        class="grid product-grid contains-card contains-card--product contains-card--standard grid--4-col-desktop grid--2-col-tablet-down"
        role="list"
        aria-label="Slider"
      >
        
<li
            id="Slide-template--17607317717158__featured_collection_dbkBPm-1"
            class="grid__item scroll-trigger animate--slide-in"
            
              data-cascade
              style="--animation-order: 1;"
            
          >
            
<style>
  .system-font{
  font-family: var(--font-heading-family)!important;
    font-size: 1.2rem!important;
  }
</style><link href="//wtflex.in/cdn/shop/t/81/assets/component-rating.css?v=179577762467860590411730879288" rel="stylesheet" type="text/css" media="all" />
  <link href="//wtflex.in/cdn/shop/t/81/assets/component-volume-pricing.css?v=111870094811454961941730879288" rel="stylesheet" type="text/css" media="all" />

  <link href="//wtflex.in/cdn/shop/t/81/assets/component-price.css?v=42108041875070243851730879288" rel="stylesheet" type="text/css" media="all" />
  <link href="//wtflex.in/cdn/shop/t/81/assets/quick-order-list.css?v=38387008350345892421730879288" rel="stylesheet" type="text/css" media="all" />
  <link href="//wtflex.in/cdn/shop/t/81/assets/quantity-popover.css?v=78745769908715669131730879288" rel="stylesheet" type="text/css" media="all" />
<div class="card-wrapper product-card-wrapper underline-links-hover">
    <div
      class="
        card card--standard
         card--media
        
        
        
        
        
      "
      style="--ratio-percent: 125.0%;"
    >
      <div
        class="card__inner color-scheme-2 gradient ratio"
        style="--ratio-percent: 125.0%;"
      ><div class="card__media">
            <div class="media media--transparent media--hover-effect">
              
              <img
                srcset="//wtflex.in/cdn/shop/files/wtf_wht.png?v=1687756362&width=165 165w,//wtflex.in/cdn/shop/files/wtf_wht.png?v=1687756362&width=360 360w,//wtflex.in/cdn/shop/files/wtf_wht.png?v=1687756362&width=533 533w,//wtflex.in/cdn/shop/files/wtf_wht.png?v=1687756362&width=720 720w,//wtflex.in/cdn/shop/files/wtf_wht.png?v=1687756362&width=940 940w,//wtflex.in/cdn/shop/files/wtf_wht.png?v=1687756362&width=1066 1066w,//wtflex.in/cdn/shop/files/wtf_wht.png?v=1687756362 1080w
                "
                src="//wtflex.in/cdn/shop/files/wtf_wht.png?v=1687756362&width=533"
                sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                alt="heavy cotton t-shirts , thick t-shirt men&#39;s , heavyweight t shirt , heavy t-shirt , heavy cotton t-shirts india , thick t shirt women&#39;s"
                class="motion-reduce"
                
                  loading="lazy"
                
                width="1080"
                height="1350"
              >
              
<img
                  srcset="//wtflex.in/cdn/shop/files/wtfback.png?v=1687756361&width=165 165w,//wtflex.in/cdn/shop/files/wtfback.png?v=1687756361&width=360 360w,//wtflex.in/cdn/shop/files/wtfback.png?v=1687756361&width=533 533w,//wtflex.in/cdn/shop/files/wtfback.png?v=1687756361&width=720 720w,//wtflex.in/cdn/shop/files/wtfback.png?v=1687756361&width=940 940w,//wtflex.in/cdn/shop/files/wtfback.png?v=1687756361&width=1066 1066w,//wtflex.in/cdn/shop/files/wtfback.png?v=1687756361 1080w
                  "
                  src="//wtflex.in/cdn/shop/files/wtfback.png?v=1687756361&width=533"
                  sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                  alt=""
                  class="motion-reduce"
                  loading="lazy"
                  width="1080"
                  height="1350"
                ></div>
          </div><div class="card__content">
          <div class="card__information">
            <h3
              class="card__heading system-font"
              
            >
              <a
                href="/products/bleed-flex-white-heavyweight-t-shirt"
                data-sound="true"
                id="StandardCardNoMediaLink-template--17607317717158__featured_collection_dbkBPm-7751372603558"
                class="full-unstyled-link"

                aria-labelledby="StandardCardNoMediaLink-template--17607317717158__featured_collection_dbkBPm-7751372603558 NoMediaStandardBadge-template--17607317717158__featured_collection_dbkBPm-7751372603558"
              >
                BLEED FLEX White Heavyweight T-shirt
              </a>
            </h3>
          </div>
          
          <div class="card__badge bottom left">
</div>
          
        </div>
      </div>
      <div class="card__content">
        <div class="card__information">
          <h3
            class="card__heading system-font h5"
            
              id="title-template--17607317717158__featured_collection_dbkBPm-7751372603558"
            
          >
            <a
              href="/products/bleed-flex-white-heavyweight-t-shirt"
              id="CardLink-template--17607317717158__featured_collection_dbkBPm-7751372603558"
              class="full-unstyled-link"
              data-sound="true"
              aria-labelledby="CardLink-template--17607317717158__featured_collection_dbkBPm-7751372603558 Badge-template--17607317717158__featured_collection_dbkBPm-7751372603558"
            >
              BLEED FLEX White Heavyweight T-shirt
            </a>
          </h3>
          <div class="card-information"><span class="caption-large light"></span>
<div
    class="
      price  price--on-sale"
  >
    <div class="price__container"><div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span class="price-item price-item--regular">
            ₹ 1,199.00
          </span></div>
      <div class="price__sale">
          <span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span>
            <s class="price-item price-item--regular">
              
                ₹ 1,499.00
              
            </s>
          </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
        <span class="price-item price-item--sale price-item--last">
          ₹ 1,199.00
        </span>
      </div>
      <small class="unit-price caption hidden">
        <span class="visually-hidden">Unit price</span>
        <span class="price-item price-item--last">
          <span></span>
          <span aria-hidden="true">/</span>
          <span class="visually-hidden">&nbsp;per&nbsp;</span>
          <span>
          </span>
        </span>
      </small>
    </div></div>


            <div class="pop-club-listing" price="1199.00" prodId="7751372603558"></div></div>
        </div>
        
        
        <div class="card__badge bottom left"><span
              id="Badge-template--17607317717158__featured_collection_dbkBPm-7751372603558"
              class="badge badge--bottom-left color-scheme-4"
            >Sale</span></div>
      </div>
    </div>
  </div>
          </li><li
            id="Slide-template--17607317717158__featured_collection_dbkBPm-2"
            class="grid__item scroll-trigger animate--slide-in"
            
              data-cascade
              style="--animation-order: 2;"
            
          >
            
<style>
  .system-font{
  font-family: var(--font-heading-family)!important;
    font-size: 1.2rem!important;
  }
</style><div class="card-wrapper product-card-wrapper underline-links-hover">
    <div
      class="
        card card--standard
         card--media
        
        
        
        
        
      "
      style="--ratio-percent: 125.0%;"
    >
      <div
        class="card__inner color-scheme-2 gradient ratio"
        style="--ratio-percent: 125.0%;"
      ><div class="card__media">
            <div class="media media--transparent media--hover-effect">
              
              <img
                srcset="//wtflex.in/cdn/shop/files/wf_blck.png?v=1687756309&width=165 165w,//wtflex.in/cdn/shop/files/wf_blck.png?v=1687756309&width=360 360w,//wtflex.in/cdn/shop/files/wf_blck.png?v=1687756309&width=533 533w,//wtflex.in/cdn/shop/files/wf_blck.png?v=1687756309&width=720 720w,//wtflex.in/cdn/shop/files/wf_blck.png?v=1687756309&width=940 940w,//wtflex.in/cdn/shop/files/wf_blck.png?v=1687756309&width=1066 1066w,//wtflex.in/cdn/shop/files/wf_blck.png?v=1687756309 1080w
                "
                src="//wtflex.in/cdn/shop/files/wf_blck.png?v=1687756309&width=533"
                sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                alt="thick t shirts , heavy cotton t shirts , heavy cotton t-shirts , t-shirt thick cotton , thick t-shirt men&#39;s , heavyweight t shirt , heavy t-shirt , heavy cotton t shirts india , heavy cotton t-shirts india , thick t-shirt women&#39;s , thick t shirt women&#39;s , thick cotton t shirts women&#39;s , heavy oversized t shirt , heavy oversize t shirt , heavy oversized t shirt for men , heavy oversized t shirt for women , heavy oversized t shirt for boys "
                class="motion-reduce"
                
                  loading="lazy"
                
                width="1080"
                height="1350"
              >
              
<img
                  srcset="//wtflex.in/cdn/shop/files/wtfblackback.png?v=1687756309&width=165 165w,//wtflex.in/cdn/shop/files/wtfblackback.png?v=1687756309&width=360 360w,//wtflex.in/cdn/shop/files/wtfblackback.png?v=1687756309&width=533 533w,//wtflex.in/cdn/shop/files/wtfblackback.png?v=1687756309&width=720 720w,//wtflex.in/cdn/shop/files/wtfblackback.png?v=1687756309&width=940 940w,//wtflex.in/cdn/shop/files/wtfblackback.png?v=1687756309&width=1066 1066w,//wtflex.in/cdn/shop/files/wtfblackback.png?v=1687756309 1080w
                  "
                  src="//wtflex.in/cdn/shop/files/wtfblackback.png?v=1687756309&width=533"
                  sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                  alt=""
                  class="motion-reduce"
                  loading="lazy"
                  width="1080"
                  height="1350"
                ></div>
          </div><div class="card__content">
          <div class="card__information">
            <h3
              class="card__heading system-font"
              
            >
              <a
                href="/products/bleed-flex-black-heavyweight-t-shirt"
                data-sound="true"
                id="StandardCardNoMediaLink-template--17607317717158__featured_collection_dbkBPm-7751371587750"
                class="full-unstyled-link"

                aria-labelledby="StandardCardNoMediaLink-template--17607317717158__featured_collection_dbkBPm-7751371587750 NoMediaStandardBadge-template--17607317717158__featured_collection_dbkBPm-7751371587750"
              >
                BLEED FLEX Black Heavyweight T-shirt
              </a>
            </h3>
          </div>
          
          <div class="card__badge bottom left">
</div>
          
        </div>
      </div>
      <div class="card__content">
        <div class="card__information">
          <h3
            class="card__heading system-font h5"
            
              id="title-template--17607317717158__featured_collection_dbkBPm-7751371587750"
            
          >
            <a
              href="/products/bleed-flex-black-heavyweight-t-shirt"
              id="CardLink-template--17607317717158__featured_collection_dbkBPm-7751371587750"
              class="full-unstyled-link"
              data-sound="true"
              aria-labelledby="CardLink-template--17607317717158__featured_collection_dbkBPm-7751371587750 Badge-template--17607317717158__featured_collection_dbkBPm-7751371587750"
            >
              BLEED FLEX Black Heavyweight T-shirt
            </a>
          </h3>
          <div class="card-information"><span class="caption-large light"></span>
<div
    class="
      price  price--on-sale"
  >
    <div class="price__container"><div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span class="price-item price-item--regular">
            ₹ 1,199.00
          </span></div>
      <div class="price__sale">
          <span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span>
            <s class="price-item price-item--regular">
              
                ₹ 1,499.00
              
            </s>
          </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
        <span class="price-item price-item--sale price-item--last">
          ₹ 1,199.00
        </span>
      </div>
      <small class="unit-price caption hidden">
        <span class="visually-hidden">Unit price</span>
        <span class="price-item price-item--last">
          <span></span>
          <span aria-hidden="true">/</span>
          <span class="visually-hidden">&nbsp;per&nbsp;</span>
          <span>
          </span>
        </span>
      </small>
    </div></div>


            <div class="pop-club-listing" price="1199.00" prodId="7751371587750"></div></div>
        </div>
        
        
        <div class="card__badge bottom left"><span
              id="Badge-template--17607317717158__featured_collection_dbkBPm-7751371587750"
              class="badge badge--bottom-left color-scheme-4"
            >Sale</span></div>
      </div>
    </div>
  </div>
          </li><li
            id="Slide-template--17607317717158__featured_collection_dbkBPm-3"
            class="grid__item scroll-trigger animate--slide-in"
            
              data-cascade
              style="--animation-order: 3;"
            
          >
            
<style>
  .system-font{
  font-family: var(--font-heading-family)!important;
    font-size: 1.2rem!important;
  }
</style><div class="card-wrapper product-card-wrapper underline-links-hover">
    <div
      class="
        card card--standard
         card--media
        
        
        
        
        
      "
      style="--ratio-percent: 125.0%;"
    >
      <div
        class="card__inner color-scheme-2 gradient ratio"
        style="--ratio-percent: 125.0%;"
      ><div class="card__media">
            <div class="media media--transparent media--hover-effect">
              
              <img
                srcset="//wtflex.in/cdn/shop/files/dripcagewebsiteback.png?v=1728929024&width=165 165w,//wtflex.in/cdn/shop/files/dripcagewebsiteback.png?v=1728929024&width=360 360w,//wtflex.in/cdn/shop/files/dripcagewebsiteback.png?v=1728929024&width=533 533w,//wtflex.in/cdn/shop/files/dripcagewebsiteback.png?v=1728929024&width=720 720w,//wtflex.in/cdn/shop/files/dripcagewebsiteback.png?v=1728929024&width=940 940w,//wtflex.in/cdn/shop/files/dripcagewebsiteback.png?v=1728929024&width=1066 1066w,//wtflex.in/cdn/shop/files/dripcagewebsiteback.png?v=1728929024 1080w
                "
                src="//wtflex.in/cdn/shop/files/dripcagewebsiteback.png?v=1728929024&width=533"
                sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                alt="DRIPCAGE Heavyweight T-Shirt"
                class="motion-reduce"
                
                  loading="lazy"
                
                width="1080"
                height="1350"
              >
              
<img
                  srcset="//wtflex.in/cdn/shop/files/dripcagewebsitefront.png?v=1728929024&width=165 165w,//wtflex.in/cdn/shop/files/dripcagewebsitefront.png?v=1728929024&width=360 360w,//wtflex.in/cdn/shop/files/dripcagewebsitefront.png?v=1728929024&width=533 533w,//wtflex.in/cdn/shop/files/dripcagewebsitefront.png?v=1728929024&width=720 720w,//wtflex.in/cdn/shop/files/dripcagewebsitefront.png?v=1728929024&width=940 940w,//wtflex.in/cdn/shop/files/dripcagewebsitefront.png?v=1728929024&width=1066 1066w,//wtflex.in/cdn/shop/files/dripcagewebsitefront.png?v=1728929024 1080w
                  "
                  src="//wtflex.in/cdn/shop/files/dripcagewebsitefront.png?v=1728929024&width=533"
                  sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                  alt=""
                  class="motion-reduce"
                  loading="lazy"
                  width="1080"
                  height="1350"
                ></div>
          </div><div class="card__content">
          <div class="card__information">
            <h3
              class="card__heading system-font"
              
            >
              <a
                href="/products/dripcage-heavyweight-t-shirt"
                data-sound="true"
                id="StandardCardNoMediaLink-template--17607317717158__featured_collection_dbkBPm-8306315395238"
                class="full-unstyled-link"

                aria-labelledby="StandardCardNoMediaLink-template--17607317717158__featured_collection_dbkBPm-8306315395238 NoMediaStandardBadge-template--17607317717158__featured_collection_dbkBPm-8306315395238"
              >
                DRIPCAGE Heavyweight T-Shirt
              </a>
            </h3>
          </div>
          
          <div class="card__badge bottom left">
</div>
          
        </div>
      </div>
      <div class="card__content">
        <div class="card__information">
          <h3
            class="card__heading system-font h5"
            
              id="title-template--17607317717158__featured_collection_dbkBPm-8306315395238"
            
          >
            <a
              href="/products/dripcage-heavyweight-t-shirt"
              id="CardLink-template--17607317717158__featured_collection_dbkBPm-8306315395238"
              class="full-unstyled-link"
              data-sound="true"
              aria-labelledby="CardLink-template--17607317717158__featured_collection_dbkBPm-8306315395238 Badge-template--17607317717158__featured_collection_dbkBPm-8306315395238"
            >
              DRIPCAGE Heavyweight T-Shirt
            </a>
          </h3>
          <div class="card-information"><span class="caption-large light"></span>
<div
    class="
      price  price--on-sale"
  >
    <div class="price__container"><div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span class="price-item price-item--regular">
            ₹ 1,199.00
          </span></div>
      <div class="price__sale">
          <span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span>
            <s class="price-item price-item--regular">
              
                ₹ 1,499.00
              
            </s>
          </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
        <span class="price-item price-item--sale price-item--last">
          ₹ 1,199.00
        </span>
      </div>
      <small class="unit-price caption hidden">
        <span class="visually-hidden">Unit price</span>
        <span class="price-item price-item--last">
          <span></span>
          <span aria-hidden="true">/</span>
          <span class="visually-hidden">&nbsp;per&nbsp;</span>
          <span>
          </span>
        </span>
      </small>
    </div></div>


            <div class="pop-club-listing" price="1199.00" prodId="8306315395238"></div></div>
        </div>
        
        
        <div class="card__badge bottom left"><span
              id="Badge-template--17607317717158__featured_collection_dbkBPm-8306315395238"
              class="badge badge--bottom-left color-scheme-4"
            >Sale</span></div>
      </div>
    </div>
  </div>
          </li><li
            id="Slide-template--17607317717158__featured_collection_dbkBPm-4"
            class="grid__item scroll-trigger animate--slide-in"
            
              data-cascade
              style="--animation-order: 4;"
            
          >
            
<style>
  .system-font{
  font-family: var(--font-heading-family)!important;
    font-size: 1.2rem!important;
  }
</style><div class="card-wrapper product-card-wrapper underline-links-hover">
    <div
      class="
        card card--standard
         card--media
        
        
        
        
        
      "
      style="--ratio-percent: 125.0%;"
    >
      <div
        class="card__inner color-scheme-2 gradient ratio"
        style="--ratio-percent: 125.0%;"
      ><div class="card__media">
            <div class="media media--transparent media--hover-effect">
              
              <img
                srcset="//wtflex.in/cdn/shop/files/NoothernameWebsiteBack.png?v=1726574288&width=165 165w,//wtflex.in/cdn/shop/files/NoothernameWebsiteBack.png?v=1726574288&width=360 360w,//wtflex.in/cdn/shop/files/NoothernameWebsiteBack.png?v=1726574288&width=533 533w,//wtflex.in/cdn/shop/files/NoothernameWebsiteBack.png?v=1726574288&width=720 720w,//wtflex.in/cdn/shop/files/NoothernameWebsiteBack.png?v=1726574288&width=940 940w,//wtflex.in/cdn/shop/files/NoothernameWebsiteBack.png?v=1726574288&width=1066 1066w,//wtflex.in/cdn/shop/files/NoothernameWebsiteBack.png?v=1726574288 1080w
                "
                src="//wtflex.in/cdn/shop/files/NoothernameWebsiteBack.png?v=1726574288&width=533"
                sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                alt="NO OTHER NAME Heavyweight T-shirt"
                class="motion-reduce"
                
                  loading="lazy"
                
                width="1080"
                height="1350"
              >
              
<img
                  srcset="//wtflex.in/cdn/shop/files/NoothernameWebsiteFront.png?v=1726574276&width=165 165w,//wtflex.in/cdn/shop/files/NoothernameWebsiteFront.png?v=1726574276&width=360 360w,//wtflex.in/cdn/shop/files/NoothernameWebsiteFront.png?v=1726574276&width=533 533w,//wtflex.in/cdn/shop/files/NoothernameWebsiteFront.png?v=1726574276&width=720 720w,//wtflex.in/cdn/shop/files/NoothernameWebsiteFront.png?v=1726574276&width=940 940w,//wtflex.in/cdn/shop/files/NoothernameWebsiteFront.png?v=1726574276&width=1066 1066w,//wtflex.in/cdn/shop/files/NoothernameWebsiteFront.png?v=1726574276 1080w
                  "
                  src="//wtflex.in/cdn/shop/files/NoothernameWebsiteFront.png?v=1726574276&width=533"
                  sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                  alt=""
                  class="motion-reduce"
                  loading="lazy"
                  width="1080"
                  height="1350"
                ></div>
          </div><div class="card__content">
          <div class="card__information">
            <h3
              class="card__heading system-font"
              
            >
              <a
                href="/products/no-other-name-heavyweight-t-shirt"
                data-sound="true"
                id="StandardCardNoMediaLink-template--17607317717158__featured_collection_dbkBPm-8298967892134"
                class="full-unstyled-link"

                aria-labelledby="StandardCardNoMediaLink-template--17607317717158__featured_collection_dbkBPm-8298967892134 NoMediaStandardBadge-template--17607317717158__featured_collection_dbkBPm-8298967892134"
              >
                NO OTHER NAME Heavyweight T-shirt
              </a>
            </h3>
          </div>
          
          <div class="card__badge bottom left">
</div>
          
        </div>
      </div>
      <div class="card__content">
        <div class="card__information">
          <h3
            class="card__heading system-font h5"
            
              id="title-template--17607317717158__featured_collection_dbkBPm-8298967892134"
            
          >
            <a
              href="/products/no-other-name-heavyweight-t-shirt"
              id="CardLink-template--17607317717158__featured_collection_dbkBPm-8298967892134"
              class="full-unstyled-link"
              data-sound="true"
              aria-labelledby="CardLink-template--17607317717158__featured_collection_dbkBPm-8298967892134 Badge-template--17607317717158__featured_collection_dbkBPm-8298967892134"
            >
              NO OTHER NAME Heavyweight T-shirt
            </a>
          </h3>
          <div class="card-information"><span class="caption-large light"></span>
<div
    class="
      price  price--on-sale"
  >
    <div class="price__container"><div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span class="price-item price-item--regular">
            ₹ 1,199.00
          </span></div>
      <div class="price__sale">
          <span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span>
            <s class="price-item price-item--regular">
              
                ₹ 1,499.00
              
            </s>
          </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
        <span class="price-item price-item--sale price-item--last">
          ₹ 1,199.00
        </span>
      </div>
      <small class="unit-price caption hidden">
        <span class="visually-hidden">Unit price</span>
        <span class="price-item price-item--last">
          <span></span>
          <span aria-hidden="true">/</span>
          <span class="visually-hidden">&nbsp;per&nbsp;</span>
          <span>
          </span>
        </span>
      </small>
    </div></div>


            <div class="pop-club-listing" price="1199.00" prodId="8298967892134"></div></div>
        </div>
        
        
        <div class="card__badge bottom left"><span
              id="Badge-template--17607317717158__featured_collection_dbkBPm-8298967892134"
              class="badge badge--bottom-left color-scheme-4"
            >Sale</span></div>
      </div>
    </div>
  </div>
          </li></ul></slider-component><div class="center collection__view-all scroll-trigger animate--slide-in">
        <a
          href="/collections/heavyweight-t-shirt"
          class="viewAllStyle button"
          aria-label="View all products in the HEAVYWEIGHT T-SHIRT collection"
        >
          View all
        </a>
      </div></div>
</div>


</section><div id="shopify-section-template--17607317717158__product_picker_fUNbK6" class="shopify-section">

<style>
  .image-slider-section {
    position: relative;
    overflow: hidden;
    width: 100%;
  }
  .image-slider-container {
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
              
      padding: 2rem 0 3rem 0;
    
  }
  .slider {
    display: flex;
    width: 100%;
    overflow: hidden;
  }
  .slide {
    display: none;
    flex-direction: column;
    flex-shrink: 0;
    width: 100%;
    text-align: center;
    transition: transform 0.3s ease;
  }
  .slide img, .wtf-video-pick {
    width: 100%;
    height: 60vh;
    object-fit: cover
  }
  .slide-heading h2 {
    font-size: 1.5em;
    margin: 10px 0;
  }
  .product-cards {
    display: grid;
        
      display: none !important;
    
    padding: 10px 0;
    grid-template-columns: repeat(2, 1fr);
    gap: 4px;
  }
  .product-card {
    width: 100%;
  }  
  .top-prod-picker{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin: 2rem 0;
  }
  .top-prod-picker h2{
    margin: 0;
  }
  .top-prod-picker .prev-next-arrows{
    display: flex;
    gap: 5px;
  }
  .top-prod-picker .prev, .top-prod-picker .next {    
    background-color: #121212;
    color: white;
    border: none;
    border-radius: 4px;
    padding: 6px 10px;
    cursor: pointer;
  }
  @media screen and (min-width: 749px){
    .slide img, .wtf-video-pick{
      height: 60vh;
    }
  }
  @media screen and (min-width: 990px) {
    .slide{
      flex-direction: row;
      gap: 8px;      
    }
    .product-cards{
      grid-template-columns: repeat(2, 1fr);
      gap: 8px;
      padding: 0;
    }
    .image-slider-container{
      padding-bottom: 3rem;
    }
  }
</style>

















<section class="image-slider-section page-width">
  <div class="image-slider-container">
    <div class="top-prod-picker">
      <h2 class="uppercase h2">Pick Your Drip</h2>
      <div class="prev-next-arrows">
        <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="next" onclick="moveSlide(1)">&#10095;</button>
      </div>
    </div>
    <div class="slider" id="slider">

      
      <div class="slide scroll-trigger animate--slide-in">
        <video class="wtf-video-pick" loop muted autoplay playsinline>
          <source
            src="https://cdn.shopify.com/videos/c/o/v/e295e8c078ac4ad7be8ba2a1504a69c6.mp4"
            type="video/mp4"
          >
          Your browser does not support the video tag.
        </video>
        <div class="product-cards">
          <div class="product-card">
            
<style>
  .system-font{
  font-family: var(--font-heading-family)!important;
    font-size: 1.2rem!important;
  }
</style><link href="//wtflex.in/cdn/shop/t/81/assets/component-rating.css?v=179577762467860590411730879288" rel="stylesheet" type="text/css" media="all" />
  <link href="//wtflex.in/cdn/shop/t/81/assets/component-volume-pricing.css?v=111870094811454961941730879288" rel="stylesheet" type="text/css" media="all" />

  <link href="//wtflex.in/cdn/shop/t/81/assets/component-price.css?v=42108041875070243851730879288" rel="stylesheet" type="text/css" media="all" />
  <link href="//wtflex.in/cdn/shop/t/81/assets/quick-order-list.css?v=38387008350345892421730879288" rel="stylesheet" type="text/css" media="all" />
  <link href="//wtflex.in/cdn/shop/t/81/assets/quantity-popover.css?v=78745769908715669131730879288" rel="stylesheet" type="text/css" media="all" />
<div class="card-wrapper product-card-wrapper underline-links-hover">
    <div
      class="
        card card--standard
        
        
        
      "
      style="--ratio-percent: 125.0%;"
    >
      <div
        class="card__inner color-scheme-2 gradient ratio"
      >
        <div
          class="card__media "
        >
          <div
            class="media media--transparent"
          ><svg class="placeholder-svg" preserveAspectRatio="xMidYMid slice" width="449" height="448" viewBox="0 0 449 448" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_894_1503)"><path d="M448.04 0H.04v448h448V0Z" fill="#F2F2F2"/><path d="m354.57 158.19-33.31-35.87a59.971 59.971 0 0 0-32.2-18.01l-20.99-4.2c-2.72-.49-5.45-.93-8.17-1.33l-.01.01v-.01c-1.29-.21-2.58-.31-3.88-.29-1.3.01-2.6.14-3.88.38l-7.25 1.36-7.08 1.33c-4.54.85-9.13 1.28-13.72 1.27-4.59 0-9.19-.42-13.72-1.27l-7.08-1.33-7.25-1.36c-1.28-.24-2.58-.37-3.88-.38-1.3-.02-2.6.08-3.88.29v.01l-.01-.01c-2.73.4-5.46.83-8.17 1.33l-20.99 4.2a59.971 59.971 0 0 0-32.2 18.01l-33.31 35.87c-3.03 3.26-2.81 8.37.48 11.36l32.37 29.43c3.16 2.87 8.02 2.76 11.04-.26l9.48-9.48c1.89-1.89 5.12-.55 5.12 2.12v136.76c0 4.42 3.58 8 8 8h128c4.42 0 8-3.58 8-8V191.36c0-2.67 3.23-4.01 5.12-2.12l9.48 9.48a7.994 7.994 0 0 0 11.04.26l32.37-29.43c3.29-2.99 3.51-8.1.48-11.36Zm-130.5-26.08h-.34.7H224.07Z" fill="#1F8A84"/><path d="m252.071 98.87-14.35 2.69a74.08 74.08 0 0 1-27.37 0l-14.35-2.69c-2.56-.48-5.17-.51-7.74-.09 1.36 18.63 16.85 33.32 35.78 33.32s34.41-14.69 35.78-33.32c-2.57-.42-5.18-.39-7.74.09h-.01Z" fill="#187F80"/><path d="m196.02 109.55 14.34 2.7c9.04 1.7 18.31 1.7 27.35 0l14.34-2.7c1.78-.33 3.58-.44 5.38-.33 1.27-3.27 2.09-6.77 2.35-10.43-2.56-.42-5.18-.39-7.73.09l-14.34 2.7c-9.04 1.7-18.31 1.7-27.35 0l-14.34-2.7c-2.55-.48-5.17-.51-7.73-.09.27 3.66 1.08 7.16 2.35 10.43 1.8-.1 3.61 0 5.38.33Z" fill="#1F8A84"/><path d="M232.42 112.11h-16.76a1.62 1.62 0 0 0-1.62 1.62v7.76c0 .895.725 1.62 1.62 1.62h16.76a1.62 1.62 0 0 0 1.62-1.62v-7.76a1.62 1.62 0 0 0-1.62-1.62Z" fill="#fff"/><path d="M185.2 96.07c1.65-.29 3.18.86 3.45 2.52 2.73 17.09 17.53 30.16 35.39 30.16s32.66-13.06 35.39-30.16c.26-1.66 1.79-2.81 3.45-2.52l5.93 1.04c1.59.28 2.68 1.78 2.43 3.38-3.64 22.79-23.38 40.21-47.2 40.21-23.82 0-43.56-17.42-47.2-40.21-.25-1.6.84-3.1 2.43-3.38l5.93-1.04ZM95.85 155.74l-2.23 2.4c-3.03 3.26-2.81 8.37.48 11.36l32.371 29.43c3.16 2.87 8.02 2.76 11.04-.26l2.56-2.56-44.22-40.37ZM352.29 155.74l2.23 2.4c3.03 3.26 2.81 8.37-.48 11.36l-32.37 29.43c-3.16 2.87-8.02 2.76-11.04-.26l-2.56-2.56 44.22-40.37Z" fill="#59B1AB"/><path d="m267.02 218.12-10.37 4.15a12.378 12.378 0 0 1-9.23 0l-10.37-4.15a7.985 7.985 0 0 1-5.02-7.41v-35.6c0-1.66 1.34-3 3-3h34c1.66 0 3 1.34 3 3v35.6c0 3.26-1.99 6.2-5.02 7.41h.01Z" fill="#3A9C97"/><path d="M235.04 172h34c1.66 0 3 1.34 3 3v9h-40v-9c0-1.66 1.34-3 3-3Z" fill="#59B1AB"/><path d="M288 284.11H152.04v28h130.8a30.944 30.944 0 0 0 5.16-17.12v-10.88ZM152.04 264.11v8h135.53c-.2-2.67-.46-5.34-.79-8H152.04ZM283.86 246.53c-.13-.77-.22-1.54-.33-2.3H152.04v8h132.82c-.34-1.89-.67-3.69-.95-5.42l-.04-.27-.01-.01Z" fill="#106770"/><path opacity=".5" d="M293.97 195.51a74.12 74.12 0 0 0-10.44 48.71h12.51v8h-11.18c.29 1.58.59 3.22.89 4.95.4 2.3.74 4.62 1.03 6.94h9.26v8h-8.47c.29 3.9.44 7.8.44 11.71v.29h8.04v28h-13.2a30.999 30.999 0 0 1-17.71 12.83 89.888 89.888 0 0 1-42.54 1.17l-15.36-3.29a90.172 90.172 0 0 0-38.42.15l-16.73 3.73v1.41c0 4.42 3.58 8 8 8h128c4.42 0 8-3.58 8-8v-136l-2.1 3.4h-.02Z" fill="#59B1AB"/><path d="M296.04 284.11H288v10.88c0 6.26-1.88 12.16-5.16 17.12h13.2v-28ZM296.04 264.11h-9.26c.33 2.66.59 5.33.79 8h8.47v-8ZM296.04 244.22h-12.51c.1.77.2 1.54.33 2.3l.04.27c.29 1.74.61 3.54.95 5.42h11.18v-8l.01.01Z" fill="#59B1AB"/><path d="M296.04 284.11H288v10.88c0 6.26-1.88 12.16-5.16 17.12h13.2v-28ZM296.04 264.11h-9.26c.33 2.66.59 5.33.79 8h8.47v-8ZM296.04 244.22h-12.51c.1.77.2 1.54.33 2.3l.04.27c.29 1.74.61 3.54.95 5.42h11.18v-8l.01.01Z" fill="#1F8A84"/><path d="m354.57 158.19-33.31-35.87a59.971 59.971 0 0 0-32.2-18.01l-17.92-3.58c-.57 3.35-1.49 6.59-2.72 9.67l12.12 2.42a59.971 59.971 0 0 1 32.2 18.01l33.31 35.87c2.32 2.49 2.73 6.07 1.32 8.95l6.71-6.1c3.29-2.99 3.51-8.1.48-11.36h.01Z" fill="#59B1AB" opacity=".5"/></g><defs><clipPath id="clip0_894_1503"><path fill="#fff" d="M.04 0h448v448H.04z"/></clipPath></defs></svg>

            
          </div>
        </div>
      </div>
      <div class="card__content">
        <div class="card__information">
          <h3 class="card__heading system-font card__heading--placeholder h5">
            <a role="link" aria-disabled="true" data-sound="true" class="full-unstyled-link">
              Example product title
            </a>
          </h3>
          <div class="card-information">
<div
    class="
      price price--sold-out"
  >
    <div class="price__container"><div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span class="price-item price-item--regular">
            ₹ 19.99
          </span></div>
      <div class="price__sale">
          <span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span>
            <s class="price-item price-item--regular">
              
                
              
            </s>
          </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
        <span class="price-item price-item--sale price-item--last">
          ₹ 19.99
        </span>
      </div>
      <small class="unit-price caption hidden">
        <span class="visually-hidden">Unit price</span>
        <span class="price-item price-item--last">
          <span></span>
          <span aria-hidden="true">/</span>
          <span class="visually-hidden">&nbsp;per&nbsp;</span>
          <span>
          </span>
        </span>
      </small>
    </div></div>


          </div>
        </div>
      </div>
    </div>
  </div>
          </div>
          <div class="product-card">
            
<style>
  .system-font{
  font-family: var(--font-heading-family)!important;
    font-size: 1.2rem!important;
  }
</style><link href="//wtflex.in/cdn/shop/t/81/assets/component-rating.css?v=179577762467860590411730879288" rel="stylesheet" type="text/css" media="all" />
  <link href="//wtflex.in/cdn/shop/t/81/assets/component-volume-pricing.css?v=111870094811454961941730879288" rel="stylesheet" type="text/css" media="all" />

  <link href="//wtflex.in/cdn/shop/t/81/assets/component-price.css?v=42108041875070243851730879288" rel="stylesheet" type="text/css" media="all" />
  <link href="//wtflex.in/cdn/shop/t/81/assets/quick-order-list.css?v=38387008350345892421730879288" rel="stylesheet" type="text/css" media="all" />
  <link href="//wtflex.in/cdn/shop/t/81/assets/quantity-popover.css?v=78745769908715669131730879288" rel="stylesheet" type="text/css" media="all" />
<div class="card-wrapper product-card-wrapper underline-links-hover">
    <div
      class="
        card card--standard
        
        
        
      "
      style="--ratio-percent: 125.0%;"
    >
      <div
        class="card__inner color-scheme-2 gradient ratio"
      >
        <div
          class="card__media "
        >
          <div
            class="media media--transparent"
          ><svg class="placeholder-svg" preserveAspectRatio="xMidYMid slice" width="449" height="448" viewBox="0 0 449 448" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_894_1503)"><path d="M448.04 0H.04v448h448V0Z" fill="#F2F2F2"/><path d="m354.57 158.19-33.31-35.87a59.971 59.971 0 0 0-32.2-18.01l-20.99-4.2c-2.72-.49-5.45-.93-8.17-1.33l-.01.01v-.01c-1.29-.21-2.58-.31-3.88-.29-1.3.01-2.6.14-3.88.38l-7.25 1.36-7.08 1.33c-4.54.85-9.13 1.28-13.72 1.27-4.59 0-9.19-.42-13.72-1.27l-7.08-1.33-7.25-1.36c-1.28-.24-2.58-.37-3.88-.38-1.3-.02-2.6.08-3.88.29v.01l-.01-.01c-2.73.4-5.46.83-8.17 1.33l-20.99 4.2a59.971 59.971 0 0 0-32.2 18.01l-33.31 35.87c-3.03 3.26-2.81 8.37.48 11.36l32.37 29.43c3.16 2.87 8.02 2.76 11.04-.26l9.48-9.48c1.89-1.89 5.12-.55 5.12 2.12v136.76c0 4.42 3.58 8 8 8h128c4.42 0 8-3.58 8-8V191.36c0-2.67 3.23-4.01 5.12-2.12l9.48 9.48a7.994 7.994 0 0 0 11.04.26l32.37-29.43c3.29-2.99 3.51-8.1.48-11.36Zm-130.5-26.08h-.34.7H224.07Z" fill="#1F8A84"/><path d="m252.071 98.87-14.35 2.69a74.08 74.08 0 0 1-27.37 0l-14.35-2.69c-2.56-.48-5.17-.51-7.74-.09 1.36 18.63 16.85 33.32 35.78 33.32s34.41-14.69 35.78-33.32c-2.57-.42-5.18-.39-7.74.09h-.01Z" fill="#187F80"/><path d="m196.02 109.55 14.34 2.7c9.04 1.7 18.31 1.7 27.35 0l14.34-2.7c1.78-.33 3.58-.44 5.38-.33 1.27-3.27 2.09-6.77 2.35-10.43-2.56-.42-5.18-.39-7.73.09l-14.34 2.7c-9.04 1.7-18.31 1.7-27.35 0l-14.34-2.7c-2.55-.48-5.17-.51-7.73-.09.27 3.66 1.08 7.16 2.35 10.43 1.8-.1 3.61 0 5.38.33Z" fill="#1F8A84"/><path d="M232.42 112.11h-16.76a1.62 1.62 0 0 0-1.62 1.62v7.76c0 .895.725 1.62 1.62 1.62h16.76a1.62 1.62 0 0 0 1.62-1.62v-7.76a1.62 1.62 0 0 0-1.62-1.62Z" fill="#fff"/><path d="M185.2 96.07c1.65-.29 3.18.86 3.45 2.52 2.73 17.09 17.53 30.16 35.39 30.16s32.66-13.06 35.39-30.16c.26-1.66 1.79-2.81 3.45-2.52l5.93 1.04c1.59.28 2.68 1.78 2.43 3.38-3.64 22.79-23.38 40.21-47.2 40.21-23.82 0-43.56-17.42-47.2-40.21-.25-1.6.84-3.1 2.43-3.38l5.93-1.04ZM95.85 155.74l-2.23 2.4c-3.03 3.26-2.81 8.37.48 11.36l32.371 29.43c3.16 2.87 8.02 2.76 11.04-.26l2.56-2.56-44.22-40.37ZM352.29 155.74l2.23 2.4c3.03 3.26 2.81 8.37-.48 11.36l-32.37 29.43c-3.16 2.87-8.02 2.76-11.04-.26l-2.56-2.56 44.22-40.37Z" fill="#59B1AB"/><path d="m267.02 218.12-10.37 4.15a12.378 12.378 0 0 1-9.23 0l-10.37-4.15a7.985 7.985 0 0 1-5.02-7.41v-35.6c0-1.66 1.34-3 3-3h34c1.66 0 3 1.34 3 3v35.6c0 3.26-1.99 6.2-5.02 7.41h.01Z" fill="#3A9C97"/><path d="M235.04 172h34c1.66 0 3 1.34 3 3v9h-40v-9c0-1.66 1.34-3 3-3Z" fill="#59B1AB"/><path d="M288 284.11H152.04v28h130.8a30.944 30.944 0 0 0 5.16-17.12v-10.88ZM152.04 264.11v8h135.53c-.2-2.67-.46-5.34-.79-8H152.04ZM283.86 246.53c-.13-.77-.22-1.54-.33-2.3H152.04v8h132.82c-.34-1.89-.67-3.69-.95-5.42l-.04-.27-.01-.01Z" fill="#106770"/><path opacity=".5" d="M293.97 195.51a74.12 74.12 0 0 0-10.44 48.71h12.51v8h-11.18c.29 1.58.59 3.22.89 4.95.4 2.3.74 4.62 1.03 6.94h9.26v8h-8.47c.29 3.9.44 7.8.44 11.71v.29h8.04v28h-13.2a30.999 30.999 0 0 1-17.71 12.83 89.888 89.888 0 0 1-42.54 1.17l-15.36-3.29a90.172 90.172 0 0 0-38.42.15l-16.73 3.73v1.41c0 4.42 3.58 8 8 8h128c4.42 0 8-3.58 8-8v-136l-2.1 3.4h-.02Z" fill="#59B1AB"/><path d="M296.04 284.11H288v10.88c0 6.26-1.88 12.16-5.16 17.12h13.2v-28ZM296.04 264.11h-9.26c.33 2.66.59 5.33.79 8h8.47v-8ZM296.04 244.22h-12.51c.1.77.2 1.54.33 2.3l.04.27c.29 1.74.61 3.54.95 5.42h11.18v-8l.01.01Z" fill="#59B1AB"/><path d="M296.04 284.11H288v10.88c0 6.26-1.88 12.16-5.16 17.12h13.2v-28ZM296.04 264.11h-9.26c.33 2.66.59 5.33.79 8h8.47v-8ZM296.04 244.22h-12.51c.1.77.2 1.54.33 2.3l.04.27c.29 1.74.61 3.54.95 5.42h11.18v-8l.01.01Z" fill="#1F8A84"/><path d="m354.57 158.19-33.31-35.87a59.971 59.971 0 0 0-32.2-18.01l-17.92-3.58c-.57 3.35-1.49 6.59-2.72 9.67l12.12 2.42a59.971 59.971 0 0 1 32.2 18.01l33.31 35.87c2.32 2.49 2.73 6.07 1.32 8.95l6.71-6.1c3.29-2.99 3.51-8.1.48-11.36h.01Z" fill="#59B1AB" opacity=".5"/></g><defs><clipPath id="clip0_894_1503"><path fill="#fff" d="M.04 0h448v448H.04z"/></clipPath></defs></svg>

            
          </div>
        </div>
      </div>
      <div class="card__content">
        <div class="card__information">
          <h3 class="card__heading system-font card__heading--placeholder h5">
            <a role="link" aria-disabled="true" data-sound="true" class="full-unstyled-link">
              Example product title
            </a>
          </h3>
          <div class="card-information">
<div
    class="
      price price--sold-out"
  >
    <div class="price__container"><div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span class="price-item price-item--regular">
            ₹ 19.99
          </span></div>
      <div class="price__sale">
          <span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span>
            <s class="price-item price-item--regular">
              
                
              
            </s>
          </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
        <span class="price-item price-item--sale price-item--last">
          ₹ 19.99
        </span>
      </div>
      <small class="unit-price caption hidden">
        <span class="visually-hidden">Unit price</span>
        <span class="price-item price-item--last">
          <span></span>
          <span aria-hidden="true">/</span>
          <span class="visually-hidden">&nbsp;per&nbsp;</span>
          <span>
          </span>
        </span>
      </small>
    </div></div>


          </div>
        </div>
      </div>
    </div>
  </div>
          </div>
        </div>
      </div>
      

      
      <div class="slide scroll-trigger animate--slide-in">
        <video class="wtf-video-pick" loop muted autoplay playsinline>
          <source
            src="https://cdn.shopify.com/videos/c/o/v/c92e9cf080d940e9a5b6f0b5b6875e17.mp4"
            type="video/mp4"
          >
          Your browser does not support the video tag.
        </video>
        <div class="product-cards">
          <div class="product-card">
            
<style>
  .system-font{
  font-family: var(--font-heading-family)!important;
    font-size: 1.2rem!important;
  }
</style><link href="//wtflex.in/cdn/shop/t/81/assets/component-rating.css?v=179577762467860590411730879288" rel="stylesheet" type="text/css" media="all" />
  <link href="//wtflex.in/cdn/shop/t/81/assets/component-volume-pricing.css?v=111870094811454961941730879288" rel="stylesheet" type="text/css" media="all" />

  <link href="//wtflex.in/cdn/shop/t/81/assets/component-price.css?v=42108041875070243851730879288" rel="stylesheet" type="text/css" media="all" />
  <link href="//wtflex.in/cdn/shop/t/81/assets/quick-order-list.css?v=38387008350345892421730879288" rel="stylesheet" type="text/css" media="all" />
  <link href="//wtflex.in/cdn/shop/t/81/assets/quantity-popover.css?v=78745769908715669131730879288" rel="stylesheet" type="text/css" media="all" />
<div class="card-wrapper product-card-wrapper underline-links-hover">
    <div
      class="
        card card--standard
         card--media
        
        
        
        
        
      "
      style="--ratio-percent: 125.0%;"
    >
      <div
        class="card__inner color-scheme-2 gradient ratio"
        style="--ratio-percent: 125.0%;"
      ><div class="card__media">
            <div class="media media--transparent media--hover-effect">
              
              <img
                srcset="//wtflex.in/cdn/shop/files/dreamerbck2.png?v=1693570431&width=165 165w,//wtflex.in/cdn/shop/files/dreamerbck2.png?v=1693570431&width=360 360w,//wtflex.in/cdn/shop/files/dreamerbck2.png?v=1693570431&width=533 533w,//wtflex.in/cdn/shop/files/dreamerbck2.png?v=1693570431&width=720 720w,//wtflex.in/cdn/shop/files/dreamerbck2.png?v=1693570431&width=940 940w,//wtflex.in/cdn/shop/files/dreamerbck2.png?v=1693570431&width=1066 1066w,//wtflex.in/cdn/shop/files/dreamerbck2.png?v=1693570431 1080w
                "
                src="//wtflex.in/cdn/shop/files/dreamerbck2.png?v=1693570431&width=533"
                sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                alt="oversized heavy t shirt , heavy t shirt , baggy heavy t shirt , cotton heavy t shirt , heavy t shirt for mens , heavy t shirt for women , blue heavy t shirt"
                class="motion-reduce"
                
                  loading="lazy"
                
                width="1080"
                height="1350"
              >
              
</div>
          </div><div class="card__content">
          <div class="card__information">
            <h3
              class="card__heading system-font"
              
            >
              <a
                href="/products/dreamers-rebels-heavyweight-t-shirt"
                data-sound="true"
                id="StandardCardNoMediaLink--7784810315942"
                class="full-unstyled-link"

                aria-labelledby="StandardCardNoMediaLink--7784810315942 NoMediaStandardBadge--7784810315942"
              >
                DREAMERS &amp; REBELS Heavyweight T-shirt
              </a>
            </h3>
          </div>
          
          <div class="card__badge bottom left">
</div>
          
        </div>
      </div>
      <div class="card__content">
        <div class="card__information">
          <h3
            class="card__heading system-font h5"
            
              id="title--7784810315942"
            
          >
            <a
              href="/products/dreamers-rebels-heavyweight-t-shirt"
              id="CardLink--7784810315942"
              class="full-unstyled-link"
              data-sound="true"
              aria-labelledby="CardLink--7784810315942 Badge--7784810315942"
            >
              DREAMERS &amp; REBELS Heavyweight T-shirt
            </a>
          </h3>
          <div class="card-information"><span class="caption-large light"></span>
<div
    class="
      price  price--on-sale"
  >
    <div class="price__container"><div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span class="price-item price-item--regular">
            ₹ 1,199.00
          </span></div>
      <div class="price__sale">
          <span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span>
            <s class="price-item price-item--regular">
              
                ₹ 1,499.00
              
            </s>
          </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
        <span class="price-item price-item--sale price-item--last">
          ₹ 1,199.00
        </span>
      </div>
      <small class="unit-price caption hidden">
        <span class="visually-hidden">Unit price</span>
        <span class="price-item price-item--last">
          <span></span>
          <span aria-hidden="true">/</span>
          <span class="visually-hidden">&nbsp;per&nbsp;</span>
          <span>
          </span>
        </span>
      </small>
    </div></div>


            <div class="pop-club-listing" price="1199.00" prodId="7784810315942"></div></div>
        </div>
        
        
        <div class="card__badge bottom left"><span
              id="Badge--7784810315942"
              class="badge badge--bottom-left color-scheme-4"
            >Sale</span></div>
      </div>
    </div>
  </div>
          </div>
          <div class="product-card">
            
<style>
  .system-font{
  font-family: var(--font-heading-family)!important;
    font-size: 1.2rem!important;
  }
</style><link href="//wtflex.in/cdn/shop/t/81/assets/component-rating.css?v=179577762467860590411730879288" rel="stylesheet" type="text/css" media="all" />
  <link href="//wtflex.in/cdn/shop/t/81/assets/component-volume-pricing.css?v=111870094811454961941730879288" rel="stylesheet" type="text/css" media="all" />

  <link href="//wtflex.in/cdn/shop/t/81/assets/component-price.css?v=42108041875070243851730879288" rel="stylesheet" type="text/css" media="all" />
  <link href="//wtflex.in/cdn/shop/t/81/assets/quick-order-list.css?v=38387008350345892421730879288" rel="stylesheet" type="text/css" media="all" />
  <link href="//wtflex.in/cdn/shop/t/81/assets/quantity-popover.css?v=78745769908715669131730879288" rel="stylesheet" type="text/css" media="all" />
<div class="card-wrapper product-card-wrapper underline-links-hover">
    <div
      class="
        card card--standard
         card--media
        
        
        
        
        
      "
      style="--ratio-percent: 125.0%;"
    >
      <div
        class="card__inner color-scheme-2 gradient ratio"
        style="--ratio-percent: 125.0%;"
      ><div class="card__media">
            <div class="media media--transparent media--hover-effect">
              
              <img
                srcset="//wtflex.in/cdn/shop/files/Brown_Pattern_Cargo_Website_1-2.png?v=1719646485&width=165 165w,//wtflex.in/cdn/shop/files/Brown_Pattern_Cargo_Website_1-2.png?v=1719646485&width=360 360w,//wtflex.in/cdn/shop/files/Brown_Pattern_Cargo_Website_1-2.png?v=1719646485&width=533 533w,//wtflex.in/cdn/shop/files/Brown_Pattern_Cargo_Website_1-2.png?v=1719646485&width=720 720w,//wtflex.in/cdn/shop/files/Brown_Pattern_Cargo_Website_1-2.png?v=1719646485&width=940 940w,//wtflex.in/cdn/shop/files/Brown_Pattern_Cargo_Website_1-2.png?v=1719646485&width=1066 1066w,//wtflex.in/cdn/shop/files/Brown_Pattern_Cargo_Website_1-2.png?v=1719646485 1080w
                "
                src="//wtflex.in/cdn/shop/files/Brown_Pattern_Cargo_Website_1-2.png?v=1719646485&width=533"
                sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                alt="cargo, pants, relaxed, comfortable, pockets, brown"
                class="motion-reduce"
                
                  loading="lazy"
                
                width="1080"
                height="1350"
              >
              
</div>
          </div><div class="card__content">
          <div class="card__information">
            <h3
              class="card__heading system-font"
              
            >
              <a
                href="/products/brown-pocket-cargo-pants"
                data-sound="true"
                id="StandardCardNoMediaLink--8154039550118"
                class="full-unstyled-link"

                aria-labelledby="StandardCardNoMediaLink--8154039550118 NoMediaStandardBadge--8154039550118"
              >
                BROWN Pocket Cargo Pants
              </a>
            </h3>
          </div>
          
          <div class="card__badge bottom left">
</div>
          
        </div>
      </div>
      <div class="card__content">
        <div class="card__information">
          <h3
            class="card__heading system-font h5"
            
              id="title--8154039550118"
            
          >
            <a
              href="/products/brown-pocket-cargo-pants"
              id="CardLink--8154039550118"
              class="full-unstyled-link"
              data-sound="true"
              aria-labelledby="CardLink--8154039550118 Badge--8154039550118"
            >
              BROWN Pocket Cargo Pants
            </a>
          </h3>
          <div class="card-information"><span class="caption-large light"></span>
<div
    class="
      price  price--on-sale"
  >
    <div class="price__container"><div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span class="price-item price-item--regular">
            ₹ 1,599.00
          </span></div>
      <div class="price__sale">
          <span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span>
            <s class="price-item price-item--regular">
              
                ₹ 1,799.00
              
            </s>
          </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
        <span class="price-item price-item--sale price-item--last">
          ₹ 1,599.00
        </span>
      </div>
      <small class="unit-price caption hidden">
        <span class="visually-hidden">Unit price</span>
        <span class="price-item price-item--last">
          <span></span>
          <span aria-hidden="true">/</span>
          <span class="visually-hidden">&nbsp;per&nbsp;</span>
          <span>
          </span>
        </span>
      </small>
    </div></div>


            <div class="pop-club-listing" price="1599.00" prodId="8154039550118"></div></div>
        </div>
        
        
        <div class="card__badge bottom left"><span
              id="Badge--8154039550118"
              class="badge badge--bottom-left color-scheme-4"
            >Sale</span></div>
      </div>
    </div>
  </div>
          </div>
        </div>
      </div>
      

      

      
      
    </div>    
  </div>
</section>

<script>
  let currentSlide = 0;
  const slides = document.querySelectorAll('.slide');
  function showSlide(index) {
    slides.forEach((slide, i) => {
      slide.style.display = i === index ? 'flex' : 'none';
    });
  }
  function moveSlide(step) {
    currentSlide = (currentSlide + step + slides.length) % slides.length;
    showSlide(currentSlide);
  }
  document.addEventListener('DOMContentLoaded', () => {
    showSlide(currentSlide);
  });
  $('body').on('click touchstart', function ()  {
    const videoElement = document.getElementsByClassName('wtf-video-pick');
    if (videoElement.playing) {}
    else {
      $('.wtf-video-pick').trigger('play');
    }
  });
</script></div><section id="shopify-section-template--17607317717158__featured_collection_NUQxXW" class="shopify-section section"><link href="//wtflex.in/cdn/shop/t/81/assets/component-card.css?v=165197172554000981641730879288" rel="stylesheet" type="text/css" media="all" />
<link href="//wtflex.in/cdn/shop/t/81/assets/component-price.css?v=42108041875070243851730879288" rel="stylesheet" type="text/css" media="all" />

<link href="//wtflex.in/cdn/shop/t/81/assets/component-slider.css?v=102883555868012287761730879288" rel="stylesheet" type="text/css" media="all" />
<link href="//wtflex.in/cdn/shop/t/81/assets/template-collection.css?v=134407768395003416811730879288" rel="stylesheet" type="text/css" media="all" />

<style data-shopify>.section-template--17607317717158__featured_collection_NUQxXW-padding {
    padding-top: 15px;
    padding-bottom: 27px;
  }
  .viewAllStyle{
    min-height: auto;
    min-width: auto;
    padding: 1rem 3rem;
    text-transform: uppercase;
    font-weight: 500 !important;
    font-size: 11px;
  }

  @media screen and (min-width: 750px) {
    .section-template--17607317717158__featured_collection_NUQxXW-padding {
      padding-top: 20px;
      padding-bottom: 36px;
    }
    .viewAllStyle{
      font-size: 1.3rem;
    }
  }</style><div
  class="color-scheme-1 isolate gradient"
>
  <div
    class="collection section-template--17607317717158__featured_collection_NUQxXW-padding"
    id="collection-template--17607317717158__featured_collection_NUQxXW"
    data-id="template--17607317717158__featured_collection_NUQxXW"
  >
    <div class="collection__title title-wrapper title-wrapper--no-top-margin page-width"><h2 class="closer-text uppercase title inline-richtext h2 scroll-trigger animate--slide-in">
          hot picks
        </h2></div>

    <slider-component class="slider-mobile-gutter page-width page-width-desktop scroll-trigger animate--slide-in">
      <ul
        id="Slider-template--17607317717158__featured_collection_NUQxXW"
        data-id="template--17607317717158__featured_collection_NUQxXW"
        class="grid product-grid contains-card contains-card--product contains-card--standard grid--4-col-desktop grid--2-col-tablet-down"
        role="list"
        aria-label="Slider"
      >
        
<li
            id="Slide-template--17607317717158__featured_collection_NUQxXW-1"
            class="grid__item scroll-trigger animate--slide-in"
            
              data-cascade
              style="--animation-order: 1;"
            
          >
            
<style>
  .system-font{
  font-family: var(--font-heading-family)!important;
    font-size: 1.2rem!important;
  }
</style><link href="//wtflex.in/cdn/shop/t/81/assets/component-rating.css?v=179577762467860590411730879288" rel="stylesheet" type="text/css" media="all" />
  <link href="//wtflex.in/cdn/shop/t/81/assets/component-volume-pricing.css?v=111870094811454961941730879288" rel="stylesheet" type="text/css" media="all" />

  <link href="//wtflex.in/cdn/shop/t/81/assets/component-price.css?v=42108041875070243851730879288" rel="stylesheet" type="text/css" media="all" />
  <link href="//wtflex.in/cdn/shop/t/81/assets/quick-order-list.css?v=38387008350345892421730879288" rel="stylesheet" type="text/css" media="all" />
  <link href="//wtflex.in/cdn/shop/t/81/assets/quantity-popover.css?v=78745769908715669131730879288" rel="stylesheet" type="text/css" media="all" />
<div class="card-wrapper product-card-wrapper underline-links-hover">
    <div
      class="
        card card--standard
         card--media
        
        
        
        
        
      "
      style="--ratio-percent: 125.0%;"
    >
      <div
        class="card__inner color-scheme-2 gradient ratio"
        style="--ratio-percent: 125.0%;"
      ><div class="card__media">
            <div class="media media--transparent media--hover-effect">
              
              <img
                srcset="//wtflex.in/cdn/shop/files/DARKHOURS1.png?v=1685026181&width=165 165w,//wtflex.in/cdn/shop/files/DARKHOURS1.png?v=1685026181&width=360 360w,//wtflex.in/cdn/shop/files/DARKHOURS1.png?v=1685026181&width=533 533w,//wtflex.in/cdn/shop/files/DARKHOURS1.png?v=1685026181&width=720 720w,//wtflex.in/cdn/shop/files/DARKHOURS1.png?v=1685026181&width=940 940w,//wtflex.in/cdn/shop/files/DARKHOURS1.png?v=1685026181&width=1066 1066w,//wtflex.in/cdn/shop/files/DARKHOURS1.png?v=1685026181 1080w
                "
                src="//wtflex.in/cdn/shop/files/DARKHOURS1.png?v=1685026181&width=533"
                sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                alt="Buy Baggy T Shirts for Men Online , mens baggy t shirt back print , baggy t shirt for mens new style , buy aesthetic oversized t shirt online , buy aesthetic oversized t shirt online india  , t shirt baggy , t shirt design , t shirt for girls , unisex t shirts"
                class="motion-reduce"
                
                  loading="lazy"
                
                width="1080"
                height="1350"
              >
              
<img
                  srcset="//wtflex.in/cdn/shop/files/DH3.png?v=1685026181&width=165 165w,//wtflex.in/cdn/shop/files/DH3.png?v=1685026181&width=360 360w,//wtflex.in/cdn/shop/files/DH3.png?v=1685026181&width=533 533w,//wtflex.in/cdn/shop/files/DH3.png?v=1685026181&width=720 720w,//wtflex.in/cdn/shop/files/DH3.png?v=1685026181&width=940 940w,//wtflex.in/cdn/shop/files/DH3.png?v=1685026181&width=1066 1066w,//wtflex.in/cdn/shop/files/DH3.png?v=1685026181 1080w
                  "
                  src="//wtflex.in/cdn/shop/files/DH3.png?v=1685026181&width=533"
                  sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                  alt=""
                  class="motion-reduce"
                  loading="lazy"
                  width="1080"
                  height="1350"
                ></div>
          </div><div class="card__content">
          <div class="card__information">
            <h3
              class="card__heading system-font"
              
            >
              <a
                href="/products/dark-hours-oversized-t-shirt"
                data-sound="true"
                id="StandardCardNoMediaLink-template--17607317717158__featured_collection_NUQxXW-7649196933286"
                class="full-unstyled-link"

                aria-labelledby="StandardCardNoMediaLink-template--17607317717158__featured_collection_NUQxXW-7649196933286 NoMediaStandardBadge-template--17607317717158__featured_collection_NUQxXW-7649196933286"
              >
                DARK HOURS Oversized T-Shirt
              </a>
            </h3>
          </div>
          
          <div class="card__badge bottom left">
</div>
          
        </div>
      </div>
      <div class="card__content">
        <div class="card__information">
          <h3
            class="card__heading system-font h5"
            
              id="title-template--17607317717158__featured_collection_NUQxXW-7649196933286"
            
          >
            <a
              href="/products/dark-hours-oversized-t-shirt"
              id="CardLink-template--17607317717158__featured_collection_NUQxXW-7649196933286"
              class="full-unstyled-link"
              data-sound="true"
              aria-labelledby="CardLink-template--17607317717158__featured_collection_NUQxXW-7649196933286 Badge-template--17607317717158__featured_collection_NUQxXW-7649196933286"
            >
              DARK HOURS Oversized T-Shirt
            </a>
          </h3>
          <div class="card-information"><span class="caption-large light"></span>
<div
    class="
      price  price--on-sale"
  >
    <div class="price__container"><div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span class="price-item price-item--regular">
            ₹ 899.00
          </span></div>
      <div class="price__sale">
          <span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span>
            <s class="price-item price-item--regular">
              
                ₹ 999.00
              
            </s>
          </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
        <span class="price-item price-item--sale price-item--last">
          ₹ 899.00
        </span>
      </div>
      <small class="unit-price caption hidden">
        <span class="visually-hidden">Unit price</span>
        <span class="price-item price-item--last">
          <span></span>
          <span aria-hidden="true">/</span>
          <span class="visually-hidden">&nbsp;per&nbsp;</span>
          <span>
          </span>
        </span>
      </small>
    </div></div>


            <div class="pop-club-listing" price="899.00" prodId="7649196933286"></div></div>
        </div>
        
        
        <div class="card__badge bottom left"><span
              id="Badge-template--17607317717158__featured_collection_NUQxXW-7649196933286"
              class="badge badge--bottom-left color-scheme-4"
            >Sale</span></div>
      </div>
    </div>
  </div>
          </li><li
            id="Slide-template--17607317717158__featured_collection_NUQxXW-2"
            class="grid__item scroll-trigger animate--slide-in"
            
              data-cascade
              style="--animation-order: 2;"
            
          >
            
<style>
  .system-font{
  font-family: var(--font-heading-family)!important;
    font-size: 1.2rem!important;
  }
</style><div class="card-wrapper product-card-wrapper underline-links-hover">
    <div
      class="
        card card--standard
         card--media
        
        
        
        
        
      "
      style="--ratio-percent: 125.0%;"
    >
      <div
        class="card__inner color-scheme-2 gradient ratio"
        style="--ratio-percent: 125.0%;"
      ><div class="card__media">
            <div class="media media--transparent media--hover-effect">
              
              <img
                srcset="//wtflex.in/cdn/shop/files/Artboard2_21.png?v=1696601981&width=165 165w,//wtflex.in/cdn/shop/files/Artboard2_21.png?v=1696601981&width=360 360w,//wtflex.in/cdn/shop/files/Artboard2_21.png?v=1696601981&width=533 533w,//wtflex.in/cdn/shop/files/Artboard2_21.png?v=1696601981&width=720 720w,//wtflex.in/cdn/shop/files/Artboard2_21.png?v=1696601981&width=940 940w,//wtflex.in/cdn/shop/files/Artboard2_21.png?v=1696601981&width=1066 1066w,//wtflex.in/cdn/shop/files/Artboard2_21.png?v=1696601981 1080w
                "
                src="//wtflex.in/cdn/shop/files/Artboard2_21.png?v=1696601981&width=533"
                sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                alt="T-shirt, oversized, Travis, Streetwear"
                class="motion-reduce"
                
                  loading="lazy"
                
                width="1080"
                height="1350"
              >
              
<img
                  srcset="//wtflex.in/cdn/shop/files/Artboard3_1.png?v=1696601981&width=165 165w,//wtflex.in/cdn/shop/files/Artboard3_1.png?v=1696601981&width=360 360w,//wtflex.in/cdn/shop/files/Artboard3_1.png?v=1696601981&width=533 533w,//wtflex.in/cdn/shop/files/Artboard3_1.png?v=1696601981&width=720 720w,//wtflex.in/cdn/shop/files/Artboard3_1.png?v=1696601981&width=940 940w,//wtflex.in/cdn/shop/files/Artboard3_1.png?v=1696601981&width=1066 1066w,//wtflex.in/cdn/shop/files/Artboard3_1.png?v=1696601981 1080w
                  "
                  src="//wtflex.in/cdn/shop/files/Artboard3_1.png?v=1696601981&width=533"
                  sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                  alt=""
                  class="motion-reduce"
                  loading="lazy"
                  width="1080"
                  height="1350"
                ></div>
          </div><div class="card__content">
          <div class="card__information">
            <h3
              class="card__heading system-font"
              
            >
              <a
                href="/products/travis-oversized-t-shirt"
                data-sound="true"
                id="StandardCardNoMediaLink-template--17607317717158__featured_collection_NUQxXW-7473512415398"
                class="full-unstyled-link"

                aria-labelledby="StandardCardNoMediaLink-template--17607317717158__featured_collection_NUQxXW-7473512415398 NoMediaStandardBadge-template--17607317717158__featured_collection_NUQxXW-7473512415398"
              >
                TRAVIS Oversized T-Shirt
              </a>
            </h3>
          </div>
          
          <div class="card__badge bottom left">
</div>
          
        </div>
      </div>
      <div class="card__content">
        <div class="card__information">
          <h3
            class="card__heading system-font h5"
            
              id="title-template--17607317717158__featured_collection_NUQxXW-7473512415398"
            
          >
            <a
              href="/products/travis-oversized-t-shirt"
              id="CardLink-template--17607317717158__featured_collection_NUQxXW-7473512415398"
              class="full-unstyled-link"
              data-sound="true"
              aria-labelledby="CardLink-template--17607317717158__featured_collection_NUQxXW-7473512415398 Badge-template--17607317717158__featured_collection_NUQxXW-7473512415398"
            >
              TRAVIS Oversized T-Shirt
            </a>
          </h3>
          <div class="card-information"><span class="caption-large light"></span>
<div
    class="
      price  price--on-sale"
  >
    <div class="price__container"><div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span class="price-item price-item--regular">
            ₹ 899.00
          </span></div>
      <div class="price__sale">
          <span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span>
            <s class="price-item price-item--regular">
              
                ₹ 999.00
              
            </s>
          </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
        <span class="price-item price-item--sale price-item--last">
          ₹ 899.00
        </span>
      </div>
      <small class="unit-price caption hidden">
        <span class="visually-hidden">Unit price</span>
        <span class="price-item price-item--last">
          <span></span>
          <span aria-hidden="true">/</span>
          <span class="visually-hidden">&nbsp;per&nbsp;</span>
          <span>
          </span>
        </span>
      </small>
    </div></div>


            <div class="pop-club-listing" price="899.00" prodId="7473512415398"></div></div>
        </div>
        
        
        <div class="card__badge bottom left"><span
              id="Badge-template--17607317717158__featured_collection_NUQxXW-7473512415398"
              class="badge badge--bottom-left color-scheme-4"
            >Sale</span></div>
      </div>
    </div>
  </div>
          </li><li
            id="Slide-template--17607317717158__featured_collection_NUQxXW-3"
            class="grid__item scroll-trigger animate--slide-in"
            
              data-cascade
              style="--animation-order: 3;"
            
          >
            
<style>
  .system-font{
  font-family: var(--font-heading-family)!important;
    font-size: 1.2rem!important;
  }
</style><div class="card-wrapper product-card-wrapper underline-links-hover">
    <div
      class="
        card card--standard
         card--media
        
        
        
        
        
      "
      style="--ratio-percent: 125.0%;"
    >
      <div
        class="card__inner color-scheme-2 gradient ratio"
        style="--ratio-percent: 125.0%;"
      ><div class="card__media">
            <div class="media media--transparent media--hover-effect">
              
              <img
                srcset="//wtflex.in/cdn/shop/files/SPACEOUT1.jpg?v=1685034657&width=165 165w,//wtflex.in/cdn/shop/files/SPACEOUT1.jpg?v=1685034657&width=360 360w,//wtflex.in/cdn/shop/files/SPACEOUT1.jpg?v=1685034657&width=533 533w,//wtflex.in/cdn/shop/files/SPACEOUT1.jpg?v=1685034657&width=720 720w,//wtflex.in/cdn/shop/files/SPACEOUT1.jpg?v=1685034657&width=940 940w,//wtflex.in/cdn/shop/files/SPACEOUT1.jpg?v=1685034657&width=1066 1066w,//wtflex.in/cdn/shop/files/SPACEOUT1.jpg?v=1685034657 1080w
                "
                src="//wtflex.in/cdn/shop/files/SPACEOUT1.jpg?v=1685034657&width=533"
                sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                alt="baggy t shirt meesho , printed oversized t shirt , printed oversized t shirt womens "
                class="motion-reduce"
                
                  loading="lazy"
                
                width="1080"
                height="1350"
              >
              
<img
                  srcset="//wtflex.in/cdn/shop/files/SPACEOUT2.jpg?v=1685034657&width=165 165w,//wtflex.in/cdn/shop/files/SPACEOUT2.jpg?v=1685034657&width=360 360w,//wtflex.in/cdn/shop/files/SPACEOUT2.jpg?v=1685034657&width=533 533w,//wtflex.in/cdn/shop/files/SPACEOUT2.jpg?v=1685034657&width=720 720w,//wtflex.in/cdn/shop/files/SPACEOUT2.jpg?v=1685034657&width=940 940w,//wtflex.in/cdn/shop/files/SPACEOUT2.jpg?v=1685034657&width=1066 1066w,//wtflex.in/cdn/shop/files/SPACEOUT2.jpg?v=1685034657 1080w
                  "
                  src="//wtflex.in/cdn/shop/files/SPACEOUT2.jpg?v=1685034657&width=533"
                  sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                  alt=""
                  class="motion-reduce"
                  loading="lazy"
                  width="1080"
                  height="1350"
                ></div>
          </div><div class="card__content">
          <div class="card__information">
            <h3
              class="card__heading system-font"
              
            >
              <a
                href="/products/spaceout-oversized-t-shirt"
                data-sound="true"
                id="StandardCardNoMediaLink-template--17607317717158__featured_collection_NUQxXW-7540164100262"
                class="full-unstyled-link"

                aria-labelledby="StandardCardNoMediaLink-template--17607317717158__featured_collection_NUQxXW-7540164100262 NoMediaStandardBadge-template--17607317717158__featured_collection_NUQxXW-7540164100262"
              >
                SPACEOUT Oversized T-Shirt
              </a>
            </h3>
          </div>
          
          <div class="card__badge bottom left">
</div>
          
        </div>
      </div>
      <div class="card__content">
        <div class="card__information">
          <h3
            class="card__heading system-font h5"
            
              id="title-template--17607317717158__featured_collection_NUQxXW-7540164100262"
            
          >
            <a
              href="/products/spaceout-oversized-t-shirt"
              id="CardLink-template--17607317717158__featured_collection_NUQxXW-7540164100262"
              class="full-unstyled-link"
              data-sound="true"
              aria-labelledby="CardLink-template--17607317717158__featured_collection_NUQxXW-7540164100262 Badge-template--17607317717158__featured_collection_NUQxXW-7540164100262"
            >
              SPACEOUT Oversized T-Shirt
            </a>
          </h3>
          <div class="card-information"><span class="caption-large light"></span>
<div
    class="
      price  price--on-sale"
  >
    <div class="price__container"><div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span class="price-item price-item--regular">
            ₹ 899.00
          </span></div>
      <div class="price__sale">
          <span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span>
            <s class="price-item price-item--regular">
              
                ₹ 999.00
              
            </s>
          </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
        <span class="price-item price-item--sale price-item--last">
          ₹ 899.00
        </span>
      </div>
      <small class="unit-price caption hidden">
        <span class="visually-hidden">Unit price</span>
        <span class="price-item price-item--last">
          <span></span>
          <span aria-hidden="true">/</span>
          <span class="visually-hidden">&nbsp;per&nbsp;</span>
          <span>
          </span>
        </span>
      </small>
    </div></div>


            <div class="pop-club-listing" price="899.00" prodId="7540164100262"></div></div>
        </div>
        
        
        <div class="card__badge bottom left"><span
              id="Badge-template--17607317717158__featured_collection_NUQxXW-7540164100262"
              class="badge badge--bottom-left color-scheme-4"
            >Sale</span></div>
      </div>
    </div>
  </div>
          </li><li
            id="Slide-template--17607317717158__featured_collection_NUQxXW-4"
            class="grid__item scroll-trigger animate--slide-in"
            
              data-cascade
              style="--animation-order: 4;"
            
          >
            
<style>
  .system-font{
  font-family: var(--font-heading-family)!important;
    font-size: 1.2rem!important;
  }
</style><div class="card-wrapper product-card-wrapper underline-links-hover">
    <div
      class="
        card card--standard
         card--media
        
        
        
        
        
      "
      style="--ratio-percent: 125.0%;"
    >
      <div
        class="card__inner color-scheme-2 gradient ratio"
        style="--ratio-percent: 125.0%;"
      ><div class="card__media">
            <div class="media media--transparent media--hover-effect">
              
              <img
                srcset="//wtflex.in/cdn/shop/files/IMG_3376.jpg?v=1697558655&width=165 165w,//wtflex.in/cdn/shop/files/IMG_3376.jpg?v=1697558655&width=360 360w,//wtflex.in/cdn/shop/files/IMG_3376.jpg?v=1697558655&width=533 533w,//wtflex.in/cdn/shop/files/IMG_3376.jpg?v=1697558655&width=720 720w,//wtflex.in/cdn/shop/files/IMG_3376.jpg?v=1697558655&width=940 940w,//wtflex.in/cdn/shop/files/IMG_3376.jpg?v=1697558655&width=1066 1066w,//wtflex.in/cdn/shop/files/IMG_3376.jpg?v=1697558655 1080w
                "
                src="//wtflex.in/cdn/shop/files/IMG_3376.jpg?v=1697558655&width=533"
                sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                alt="SPACE MILK Oversized T-Shirt"
                class="motion-reduce"
                
                  loading="lazy"
                
                width="1080"
                height="1350"
              >
              
<img
                  srcset="//wtflex.in/cdn/shop/files/SPACEMILK_4.jpg?v=1728609796&width=165 165w,//wtflex.in/cdn/shop/files/SPACEMILK_4.jpg?v=1728609796&width=360 360w,//wtflex.in/cdn/shop/files/SPACEMILK_4.jpg?v=1728609796&width=533 533w,//wtflex.in/cdn/shop/files/SPACEMILK_4.jpg?v=1728609796&width=720 720w,//wtflex.in/cdn/shop/files/SPACEMILK_4.jpg?v=1728609796&width=940 940w,//wtflex.in/cdn/shop/files/SPACEMILK_4.jpg?v=1728609796&width=1066 1066w,//wtflex.in/cdn/shop/files/SPACEMILK_4.jpg?v=1728609796 1714w
                  "
                  src="//wtflex.in/cdn/shop/files/SPACEMILK_4.jpg?v=1728609796&width=533"
                  sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                  alt=""
                  class="motion-reduce"
                  loading="lazy"
                  width="1714"
                  height="2571"
                ></div>
          </div><div class="card__content">
          <div class="card__information">
            <h3
              class="card__heading system-font"
              
            >
              <a
                href="/products/space-milk-oversized-t-shirt"
                data-sound="true"
                id="StandardCardNoMediaLink-template--17607317717158__featured_collection_NUQxXW-7419183399078"
                class="full-unstyled-link"

                aria-labelledby="StandardCardNoMediaLink-template--17607317717158__featured_collection_NUQxXW-7419183399078 NoMediaStandardBadge-template--17607317717158__featured_collection_NUQxXW-7419183399078"
              >
                SPACE MILK Oversized T-Shirt
              </a>
            </h3>
          </div>
          
          <div class="card__badge bottom left">
</div>
          
        </div>
      </div>
      <div class="card__content">
        <div class="card__information">
          <h3
            class="card__heading system-font h5"
            
              id="title-template--17607317717158__featured_collection_NUQxXW-7419183399078"
            
          >
            <a
              href="/products/space-milk-oversized-t-shirt"
              id="CardLink-template--17607317717158__featured_collection_NUQxXW-7419183399078"
              class="full-unstyled-link"
              data-sound="true"
              aria-labelledby="CardLink-template--17607317717158__featured_collection_NUQxXW-7419183399078 Badge-template--17607317717158__featured_collection_NUQxXW-7419183399078"
            >
              SPACE MILK Oversized T-Shirt
            </a>
          </h3>
          <div class="card-information"><span class="caption-large light"></span>
<div
    class="
      price  price--on-sale"
  >
    <div class="price__container"><div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span class="price-item price-item--regular">
            ₹ 899.00
          </span></div>
      <div class="price__sale">
          <span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span>
            <s class="price-item price-item--regular">
              
                ₹ 999.00
              
            </s>
          </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
        <span class="price-item price-item--sale price-item--last">
          ₹ 899.00
        </span>
      </div>
      <small class="unit-price caption hidden">
        <span class="visually-hidden">Unit price</span>
        <span class="price-item price-item--last">
          <span></span>
          <span aria-hidden="true">/</span>
          <span class="visually-hidden">&nbsp;per&nbsp;</span>
          <span>
          </span>
        </span>
      </small>
    </div></div>


            <div class="pop-club-listing" price="899.00" prodId="7419183399078"></div></div>
        </div>
        
        
        <div class="card__badge bottom left"><span
              id="Badge-template--17607317717158__featured_collection_NUQxXW-7419183399078"
              class="badge badge--bottom-left color-scheme-4"
            >Sale</span></div>
      </div>
    </div>
  </div>
          </li></ul></slider-component><div class="center collection__view-all scroll-trigger animate--slide-in">
        <a
          href="/collections/lightweight-t-shirts"
          class="viewAllStyle button"
          aria-label="View all products in the LIGHTWEIGHT T-SHIRTS collection"
        >
          View all
        </a>
      </div></div>
</div>


</section><section id="shopify-section-template--17607317717158__image_banner_aUGDUR" class="shopify-section section"><link href="//wtflex.in/cdn/shop/t/81/assets/section-image-banner.css?v=27558833901282150661730879288" rel="stylesheet" type="text/css" media="all" />
<style data-shopify>#Banner-template--17607317717158__image_banner_aUGDUR::after {
    opacity: 0.0;
  }</style><div
  id="Banner-template--17607317717158__image_banner_aUGDUR"
  class="banner banner--content-align-center banner--content-align-mobile-center banner--medium banner--mobile-bottom scroll-trigger animate--fade-in"
><div class="banner__media media animate--fixed scroll-trigger animate--fade-in"><img src="//wtflex.in/cdn/shop/files/IMPULSIVE_1.jpg?v=1728607943&amp;width=3840" alt="" srcset="//wtflex.in/cdn/shop/files/IMPULSIVE_1.jpg?v=1728607943&amp;width=375 375w, //wtflex.in/cdn/shop/files/IMPULSIVE_1.jpg?v=1728607943&amp;width=550 550w, //wtflex.in/cdn/shop/files/IMPULSIVE_1.jpg?v=1728607943&amp;width=750 750w, //wtflex.in/cdn/shop/files/IMPULSIVE_1.jpg?v=1728607943&amp;width=1100 1100w, //wtflex.in/cdn/shop/files/IMPULSIVE_1.jpg?v=1728607943&amp;width=1500 1500w, //wtflex.in/cdn/shop/files/IMPULSIVE_1.jpg?v=1728607943&amp;width=1780 1780w, //wtflex.in/cdn/shop/files/IMPULSIVE_1.jpg?v=1728607943&amp;width=2000 2000w, //wtflex.in/cdn/shop/files/IMPULSIVE_1.jpg?v=1728607943&amp;width=3000 3000w, //wtflex.in/cdn/shop/files/IMPULSIVE_1.jpg?v=1728607943&amp;width=3840 3840w" width="1714" height="2571.0000000000005" loading="lazy" sizes="100vw" fetchpriority="auto" style="object-position:53.7641% 86.8549%;">
    </div><div class="banner__content banner__content--middle-center page-width scroll-trigger animate--slide-in">
    <div class="banner__box content-container content-container--full-width-mobile color-scheme-2 gradient"><h2
              class="banner__heading inline-richtext h2"
              
            >
              HOT OF THE STREETS
            </h2><div class="banner__text rte body" >
              <p>Wardrobe essentials from the Flex Club has hit the shelves again! Revive your aesthetics with our Latest Collection</p>
            </div><div
              class="banner__buttons"
              
            ><a
                  
                    href="/collections/all-products"
                  
                  class="button button--primary"
                >EXPLORE ALL PRODUCTS</a></div></div>
  </div>
</div>


<style> #shopify-section-template--17607317717158__image_banner_aUGDUR p {font-size: 13px; width: 90%; margin: 0 auto; text-transform: capitalize;} #shopify-section-template--17607317717158__image_banner_aUGDUR .button {min-height: auto; min-width: auto; padding: 1.2rem 3rem; text-transform: uppercase; font-weight: 500 !important; font-size: 10px;} </style></section><section id="shopify-section-template--17607317717158__rich_text_czLwbQ" class="shopify-section section"><link href="//wtflex.in/cdn/shop/t/81/assets/section-rich-text.css?v=155250126305810049721730879288" rel="stylesheet" type="text/css" media="all" />
<style data-shopify>.section-template--17607317717158__rich_text_czLwbQ-padding {
    padding-top: 30px;
    padding-bottom: 12px;
  }

  @media screen and (min-width: 750px) {
    .section-template--17607317717158__rich_text_czLwbQ-padding {
      padding-top: 40px;
      padding-bottom: 16px;
    }
  }</style><div class="isolate">
  <div class="rich-text content-container color-scheme-1 gradient rich-text--full-width content-container--full-width section-template--17607317717158__rich_text_czLwbQ-padding">
    <div class="rich-text__wrapper rich-text__wrapper--center page-width">
      <div class="rich-text__blocks center"><h2
                class="rich-text__heading closer-text rte inline-richtext h2 scroll-trigger animate--slide-in"
                
                
                  data-cascade
                  style="--animation-order: 1;"
                
              >
                STEAL THESE STYLES
              </h2></div>
    </div>
  </div>
</div>


<style> @media screen and (max-width: 549px) {/* div {padding-left: 0; margin: 0; } h2 {padding-left: 1.5rem; } */} </style></section><section id="shopify-section-template--17607317717158__featured_collection_DCDJDH" class="shopify-section section"><link href="//wtflex.in/cdn/shop/t/81/assets/component-card.css?v=165197172554000981641730879288" rel="stylesheet" type="text/css" media="all" />
<link href="//wtflex.in/cdn/shop/t/81/assets/component-price.css?v=42108041875070243851730879288" rel="stylesheet" type="text/css" media="all" />

<link href="//wtflex.in/cdn/shop/t/81/assets/component-slider.css?v=102883555868012287761730879288" rel="stylesheet" type="text/css" media="all" />
<link href="//wtflex.in/cdn/shop/t/81/assets/template-collection.css?v=134407768395003416811730879288" rel="stylesheet" type="text/css" media="all" />

<style data-shopify>.section-template--17607317717158__featured_collection_DCDJDH-padding {
    padding-top: 21px;
    padding-bottom: 27px;
  }
  .viewAllStyle{
    min-height: auto;
    min-width: auto;
    padding: 1rem 3rem;
    text-transform: uppercase;
    font-weight: 500 !important;
    font-size: 11px;
  }

  @media screen and (min-width: 750px) {
    .section-template--17607317717158__featured_collection_DCDJDH-padding {
      padding-top: 28px;
      padding-bottom: 36px;
    }
    .viewAllStyle{
      font-size: 1.3rem;
    }
  }</style><div
  class="color-scheme-1 isolate gradient"
>
  <div
    class="collection section-template--17607317717158__featured_collection_DCDJDH-padding"
    id="collection-template--17607317717158__featured_collection_DCDJDH"
    data-id="template--17607317717158__featured_collection_DCDJDH"
  >
    <div class="collection__title title-wrapper title-wrapper--no-top-margin page-width"></div>

    <slider-component class="slider-mobile-gutter page-width page-width-desktop scroll-trigger animate--slide-in">
      <ul
        id="Slider-template--17607317717158__featured_collection_DCDJDH"
        data-id="template--17607317717158__featured_collection_DCDJDH"
        class="grid product-grid contains-card contains-card--product contains-card--standard grid--4-col-desktop grid--2-col-tablet-down"
        role="list"
        aria-label="Slider"
      >
        
<li
            id="Slide-template--17607317717158__featured_collection_DCDJDH-1"
            class="grid__item scroll-trigger animate--slide-in"
            
              data-cascade
              style="--animation-order: 1;"
            
          >
            
<style>
  .system-font{
  font-family: var(--font-heading-family)!important;
    font-size: 1.2rem!important;
  }
</style><link href="//wtflex.in/cdn/shop/t/81/assets/component-rating.css?v=179577762467860590411730879288" rel="stylesheet" type="text/css" media="all" />
  <link href="//wtflex.in/cdn/shop/t/81/assets/component-volume-pricing.css?v=111870094811454961941730879288" rel="stylesheet" type="text/css" media="all" />

  <link href="//wtflex.in/cdn/shop/t/81/assets/component-price.css?v=42108041875070243851730879288" rel="stylesheet" type="text/css" media="all" />
  <link href="//wtflex.in/cdn/shop/t/81/assets/quick-order-list.css?v=38387008350345892421730879288" rel="stylesheet" type="text/css" media="all" />
  <link href="//wtflex.in/cdn/shop/t/81/assets/quantity-popover.css?v=78745769908715669131730879288" rel="stylesheet" type="text/css" media="all" />
<div class="card-wrapper product-card-wrapper underline-links-hover">
    <div
      class="
        card card--standard
         card--media
        
        
        
        
        
      "
      style="--ratio-percent: 125.0%;"
    >
      <div
        class="card__inner color-scheme-2 gradient ratio"
        style="--ratio-percent: 125.0%;"
      ><div class="card__media">
            <div class="media media--transparent media--hover-effect">
              
              <img
                srcset="//wtflex.in/cdn/shop/files/Artboard1-12.png?v=1705146952&width=165 165w,//wtflex.in/cdn/shop/files/Artboard1-12.png?v=1705146952&width=360 360w,//wtflex.in/cdn/shop/files/Artboard1-12.png?v=1705146952&width=533 533w,//wtflex.in/cdn/shop/files/Artboard1-12.png?v=1705146952&width=720 720w,//wtflex.in/cdn/shop/files/Artboard1-12.png?v=1705146952&width=940 940w,//wtflex.in/cdn/shop/files/Artboard1-12.png?v=1705146952&width=1066 1066w,//wtflex.in/cdn/shop/files/Artboard1-12.png?v=1705146952 1080w
                "
                src="//wtflex.in/cdn/shop/files/Artboard1-12.png?v=1705146952&width=533"
                sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                alt="cargo, pants, relaxed, comfortable, pockets, design, grey"
                class="motion-reduce"
                
                  loading="lazy"
                
                width="1080"
                height="1350"
              >
              
<img
                  srcset="//wtflex.in/cdn/shop/files/Artboard2-12.png?v=1705146952&width=165 165w,//wtflex.in/cdn/shop/files/Artboard2-12.png?v=1705146952&width=360 360w,//wtflex.in/cdn/shop/files/Artboard2-12.png?v=1705146952&width=533 533w,//wtflex.in/cdn/shop/files/Artboard2-12.png?v=1705146952&width=720 720w,//wtflex.in/cdn/shop/files/Artboard2-12.png?v=1705146952&width=940 940w,//wtflex.in/cdn/shop/files/Artboard2-12.png?v=1705146952&width=1066 1066w,//wtflex.in/cdn/shop/files/Artboard2-12.png?v=1705146952 1080w
                  "
                  src="//wtflex.in/cdn/shop/files/Artboard2-12.png?v=1705146952&width=533"
                  sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                  alt=""
                  class="motion-reduce"
                  loading="lazy"
                  width="1080"
                  height="1350"
                ></div>
          </div><div class="card__content">
          <div class="card__information">
            <h3
              class="card__heading system-font"
              
            >
              <a
                href="/products/dead-alright-unisex-cargo"
                data-sound="true"
                id="StandardCardNoMediaLink-template--17607317717158__featured_collection_DCDJDH-7901856170150"
                class="full-unstyled-link"

                aria-labelledby="StandardCardNoMediaLink-template--17607317717158__featured_collection_DCDJDH-7901856170150 NoMediaStandardBadge-template--17607317717158__featured_collection_DCDJDH-7901856170150"
              >
                DEAD ALRIGHT Unisex Cargo
              </a>
            </h3>
          </div>
          
          <div class="card__badge bottom left">
</div>
          
        </div>
      </div>
      <div class="card__content">
        <div class="card__information">
          <h3
            class="card__heading system-font h5"
            
              id="title-template--17607317717158__featured_collection_DCDJDH-7901856170150"
            
          >
            <a
              href="/products/dead-alright-unisex-cargo"
              id="CardLink-template--17607317717158__featured_collection_DCDJDH-7901856170150"
              class="full-unstyled-link"
              data-sound="true"
              aria-labelledby="CardLink-template--17607317717158__featured_collection_DCDJDH-7901856170150 Badge-template--17607317717158__featured_collection_DCDJDH-7901856170150"
            >
              DEAD ALRIGHT Unisex Cargo
            </a>
          </h3>
          <div class="card-information"><span class="caption-large light"></span>
<div
    class="
      price  price--on-sale"
  >
    <div class="price__container"><div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span class="price-item price-item--regular">
            ₹ 1,999.00
          </span></div>
      <div class="price__sale">
          <span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span>
            <s class="price-item price-item--regular">
              
                ₹ 2,199.00
              
            </s>
          </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
        <span class="price-item price-item--sale price-item--last">
          ₹ 1,999.00
        </span>
      </div>
      <small class="unit-price caption hidden">
        <span class="visually-hidden">Unit price</span>
        <span class="price-item price-item--last">
          <span></span>
          <span aria-hidden="true">/</span>
          <span class="visually-hidden">&nbsp;per&nbsp;</span>
          <span>
          </span>
        </span>
      </small>
    </div></div>


            <div class="pop-club-listing" price="1999.00" prodId="7901856170150"></div></div>
        </div>
        
        
        <div class="card__badge bottom left"><span
              id="Badge-template--17607317717158__featured_collection_DCDJDH-7901856170150"
              class="badge badge--bottom-left color-scheme-4"
            >Sale</span></div>
      </div>
    </div>
  </div>
          </li><li
            id="Slide-template--17607317717158__featured_collection_DCDJDH-2"
            class="grid__item scroll-trigger animate--slide-in"
            
              data-cascade
              style="--animation-order: 2;"
            
          >
            
<style>
  .system-font{
  font-family: var(--font-heading-family)!important;
    font-size: 1.2rem!important;
  }
</style><div class="card-wrapper product-card-wrapper underline-links-hover">
    <div
      class="
        card card--standard
         card--media
        
        
        
        
        
      "
      style="--ratio-percent: 125.0%;"
    >
      <div
        class="card__inner color-scheme-2 gradient ratio"
        style="--ratio-percent: 125.0%;"
      ><div class="card__media">
            <div class="media media--transparent media--hover-effect">
              
              <img
                srcset="//wtflex.in/cdn/shop/files/CP_MISSION_1.jpg?v=1728608510&width=165 165w,//wtflex.in/cdn/shop/files/CP_MISSION_1.jpg?v=1728608510&width=360 360w,//wtflex.in/cdn/shop/files/CP_MISSION_1.jpg?v=1728608510&width=533 533w,//wtflex.in/cdn/shop/files/CP_MISSION_1.jpg?v=1728608510&width=720 720w,//wtflex.in/cdn/shop/files/CP_MISSION_1.jpg?v=1728608510&width=940 940w,//wtflex.in/cdn/shop/files/CP_MISSION_1.jpg?v=1728608510&width=1066 1066w,//wtflex.in/cdn/shop/files/CP_MISSION_1.jpg?v=1728608510 1625w
                "
                src="//wtflex.in/cdn/shop/files/CP_MISSION_1.jpg?v=1728608510&width=533"
                sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                alt="MISSION Unisex Cargo"
                class="motion-reduce"
                
                  loading="lazy"
                
                width="1625"
                height="2496"
              >
              
<img
                  srcset="//wtflex.in/cdn/shop/files/CP_MISSION_2.jpg?v=1728608510&width=165 165w,//wtflex.in/cdn/shop/files/CP_MISSION_2.jpg?v=1728608510&width=360 360w,//wtflex.in/cdn/shop/files/CP_MISSION_2.jpg?v=1728608510&width=533 533w,//wtflex.in/cdn/shop/files/CP_MISSION_2.jpg?v=1728608510&width=720 720w,//wtflex.in/cdn/shop/files/CP_MISSION_2.jpg?v=1728608510&width=940 940w,//wtflex.in/cdn/shop/files/CP_MISSION_2.jpg?v=1728608510&width=1066 1066w,//wtflex.in/cdn/shop/files/CP_MISSION_2.jpg?v=1728608510 1536w
                  "
                  src="//wtflex.in/cdn/shop/files/CP_MISSION_2.jpg?v=1728608510&width=533"
                  sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                  alt=""
                  class="motion-reduce"
                  loading="lazy"
                  width="1536"
                  height="2352"
                ></div>
          </div><div class="card__content">
          <div class="card__information">
            <h3
              class="card__heading system-font"
              
            >
              <a
                href="/products/mission-cargo"
                data-sound="true"
                id="StandardCardNoMediaLink-template--17607317717158__featured_collection_DCDJDH-8060422160550"
                class="full-unstyled-link"

                aria-labelledby="StandardCardNoMediaLink-template--17607317717158__featured_collection_DCDJDH-8060422160550 NoMediaStandardBadge-template--17607317717158__featured_collection_DCDJDH-8060422160550"
              >
                MISSION Unisex Cargo
              </a>
            </h3>
          </div>
          
          <div class="card__badge bottom left">
</div>
          
        </div>
      </div>
      <div class="card__content">
        <div class="card__information">
          <h3
            class="card__heading system-font h5"
            
              id="title-template--17607317717158__featured_collection_DCDJDH-8060422160550"
            
          >
            <a
              href="/products/mission-cargo"
              id="CardLink-template--17607317717158__featured_collection_DCDJDH-8060422160550"
              class="full-unstyled-link"
              data-sound="true"
              aria-labelledby="CardLink-template--17607317717158__featured_collection_DCDJDH-8060422160550 Badge-template--17607317717158__featured_collection_DCDJDH-8060422160550"
            >
              MISSION Unisex Cargo
            </a>
          </h3>
          <div class="card-information"><span class="caption-large light"></span>
<div
    class="
      price  price--on-sale"
  >
    <div class="price__container"><div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span class="price-item price-item--regular">
            ₹ 1,999.00
          </span></div>
      <div class="price__sale">
          <span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span>
            <s class="price-item price-item--regular">
              
                ₹ 2,199.00
              
            </s>
          </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
        <span class="price-item price-item--sale price-item--last">
          ₹ 1,999.00
        </span>
      </div>
      <small class="unit-price caption hidden">
        <span class="visually-hidden">Unit price</span>
        <span class="price-item price-item--last">
          <span></span>
          <span aria-hidden="true">/</span>
          <span class="visually-hidden">&nbsp;per&nbsp;</span>
          <span>
          </span>
        </span>
      </small>
    </div></div>


            <div class="pop-club-listing" price="1999.00" prodId="8060422160550"></div></div>
        </div>
        
        
        <div class="card__badge bottom left"><span
              id="Badge-template--17607317717158__featured_collection_DCDJDH-8060422160550"
              class="badge badge--bottom-left color-scheme-4"
            >Sale</span></div>
      </div>
    </div>
  </div>
          </li><li
            id="Slide-template--17607317717158__featured_collection_DCDJDH-3"
            class="grid__item scroll-trigger animate--slide-in"
            
              data-cascade
              style="--animation-order: 3;"
            
          >
            
<style>
  .system-font{
  font-family: var(--font-heading-family)!important;
    font-size: 1.2rem!important;
  }
</style><div class="card-wrapper product-card-wrapper underline-links-hover">
    <div
      class="
        card card--standard
         card--media
        
        
        
        
        
      "
      style="--ratio-percent: 125.0%;"
    >
      <div
        class="card__inner color-scheme-2 gradient ratio"
        style="--ratio-percent: 125.0%;"
      ><div class="card__media">
            <div class="media media--transparent media--hover-effect">
              
              <img
                srcset="//wtflex.in/cdn/shop/files/CP_REVIVAL_1.jpg?v=1728609417&width=165 165w,//wtflex.in/cdn/shop/files/CP_REVIVAL_1.jpg?v=1728609417&width=360 360w,//wtflex.in/cdn/shop/files/CP_REVIVAL_1.jpg?v=1728609417&width=533 533w,//wtflex.in/cdn/shop/files/CP_REVIVAL_1.jpg?v=1728609417&width=720 720w,//wtflex.in/cdn/shop/files/CP_REVIVAL_1.jpg?v=1728609417&width=940 940w,//wtflex.in/cdn/shop/files/CP_REVIVAL_1.jpg?v=1728609417&width=1066 1066w,//wtflex.in/cdn/shop/files/CP_REVIVAL_1.jpg?v=1728609417 1714w
                "
                src="//wtflex.in/cdn/shop/files/CP_REVIVAL_1.jpg?v=1728609417&width=533"
                sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                alt="REVIVAL Unisex Cargo"
                class="motion-reduce"
                
                  loading="lazy"
                
                width="1714"
                height="2571"
              >
              
<img
                  srcset="//wtflex.in/cdn/shop/files/CP_REVIVAL_2.jpg?v=1728609416&width=165 165w,//wtflex.in/cdn/shop/files/CP_REVIVAL_2.jpg?v=1728609416&width=360 360w,//wtflex.in/cdn/shop/files/CP_REVIVAL_2.jpg?v=1728609416&width=533 533w,//wtflex.in/cdn/shop/files/CP_REVIVAL_2.jpg?v=1728609416&width=720 720w,//wtflex.in/cdn/shop/files/CP_REVIVAL_2.jpg?v=1728609416&width=940 940w,//wtflex.in/cdn/shop/files/CP_REVIVAL_2.jpg?v=1728609416&width=1066 1066w,//wtflex.in/cdn/shop/files/CP_REVIVAL_2.jpg?v=1728609416 1714w
                  "
                  src="//wtflex.in/cdn/shop/files/CP_REVIVAL_2.jpg?v=1728609416&width=533"
                  sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                  alt=""
                  class="motion-reduce"
                  loading="lazy"
                  width="1714"
                  height="2571"
                ></div>
          </div><div class="card__content">
          <div class="card__information">
            <h3
              class="card__heading system-font"
              
            >
              <a
                href="/products/revival-unisex-cargo"
                data-sound="true"
                id="StandardCardNoMediaLink-template--17607317717158__featured_collection_DCDJDH-8251682717862"
                class="full-unstyled-link"

                aria-labelledby="StandardCardNoMediaLink-template--17607317717158__featured_collection_DCDJDH-8251682717862 NoMediaStandardBadge-template--17607317717158__featured_collection_DCDJDH-8251682717862"
              >
                REVIVAL Unisex Cargo
              </a>
            </h3>
          </div>
          
          <div class="card__badge bottom left">
</div>
          
        </div>
      </div>
      <div class="card__content">
        <div class="card__information">
          <h3
            class="card__heading system-font h5"
            
              id="title-template--17607317717158__featured_collection_DCDJDH-8251682717862"
            
          >
            <a
              href="/products/revival-unisex-cargo"
              id="CardLink-template--17607317717158__featured_collection_DCDJDH-8251682717862"
              class="full-unstyled-link"
              data-sound="true"
              aria-labelledby="CardLink-template--17607317717158__featured_collection_DCDJDH-8251682717862 Badge-template--17607317717158__featured_collection_DCDJDH-8251682717862"
            >
              REVIVAL Unisex Cargo
            </a>
          </h3>
          <div class="card-information"><span class="caption-large light"></span>
<div
    class="
      price  price--on-sale"
  >
    <div class="price__container"><div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span class="price-item price-item--regular">
            ₹ 1,999.00
          </span></div>
      <div class="price__sale">
          <span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span>
            <s class="price-item price-item--regular">
              
                ₹ 2,199.00
              
            </s>
          </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
        <span class="price-item price-item--sale price-item--last">
          ₹ 1,999.00
        </span>
      </div>
      <small class="unit-price caption hidden">
        <span class="visually-hidden">Unit price</span>
        <span class="price-item price-item--last">
          <span></span>
          <span aria-hidden="true">/</span>
          <span class="visually-hidden">&nbsp;per&nbsp;</span>
          <span>
          </span>
        </span>
      </small>
    </div></div>


            <div class="pop-club-listing" price="1999.00" prodId="8251682717862"></div></div>
        </div>
        
        
        <div class="card__badge bottom left"><span
              id="Badge-template--17607317717158__featured_collection_DCDJDH-8251682717862"
              class="badge badge--bottom-left color-scheme-4"
            >Sale</span></div>
      </div>
    </div>
  </div>
          </li><li
            id="Slide-template--17607317717158__featured_collection_DCDJDH-4"
            class="grid__item scroll-trigger animate--slide-in"
            
              data-cascade
              style="--animation-order: 4;"
            
          >
            
<style>
  .system-font{
  font-family: var(--font-heading-family)!important;
    font-size: 1.2rem!important;
  }
</style><div class="card-wrapper product-card-wrapper underline-links-hover">
    <div
      class="
        card card--standard
         card--media
        
        
        
        
        
      "
      style="--ratio-percent: 125.0%;"
    >
      <div
        class="card__inner color-scheme-2 gradient ratio"
        style="--ratio-percent: 125.0%;"
      ><div class="card__media">
            <div class="media media--transparent media--hover-effect">
              
              <img
                srcset="//wtflex.in/cdn/shop/files/CP_INVISIBLECITIES_1.jpg?v=1728608017&width=165 165w,//wtflex.in/cdn/shop/files/CP_INVISIBLECITIES_1.jpg?v=1728608017&width=360 360w,//wtflex.in/cdn/shop/files/CP_INVISIBLECITIES_1.jpg?v=1728608017&width=533 533w,//wtflex.in/cdn/shop/files/CP_INVISIBLECITIES_1.jpg?v=1728608017&width=720 720w,//wtflex.in/cdn/shop/files/CP_INVISIBLECITIES_1.jpg?v=1728608017&width=940 940w,//wtflex.in/cdn/shop/files/CP_INVISIBLECITIES_1.jpg?v=1728608017&width=1066 1066w,//wtflex.in/cdn/shop/files/CP_INVISIBLECITIES_1.jpg?v=1728608017 1714w
                "
                src="//wtflex.in/cdn/shop/files/CP_INVISIBLECITIES_1.jpg?v=1728608017&width=533"
                sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                alt="INVISIBLE CITIES Unisex Cargo"
                class="motion-reduce"
                
                  loading="lazy"
                
                width="1714"
                height="2571"
              >
              
<img
                  srcset="//wtflex.in/cdn/shop/files/CP_INVISIBLECITIES_2.jpg?v=1728608017&width=165 165w,//wtflex.in/cdn/shop/files/CP_INVISIBLECITIES_2.jpg?v=1728608017&width=360 360w,//wtflex.in/cdn/shop/files/CP_INVISIBLECITIES_2.jpg?v=1728608017&width=533 533w,//wtflex.in/cdn/shop/files/CP_INVISIBLECITIES_2.jpg?v=1728608017&width=720 720w,//wtflex.in/cdn/shop/files/CP_INVISIBLECITIES_2.jpg?v=1728608017&width=940 940w,//wtflex.in/cdn/shop/files/CP_INVISIBLECITIES_2.jpg?v=1728608017&width=1066 1066w,//wtflex.in/cdn/shop/files/CP_INVISIBLECITIES_2.jpg?v=1728608017 1714w
                  "
                  src="//wtflex.in/cdn/shop/files/CP_INVISIBLECITIES_2.jpg?v=1728608017&width=533"
                  sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                  alt=""
                  class="motion-reduce"
                  loading="lazy"
                  width="1714"
                  height="2571"
                ></div>
          </div><div class="card__content">
          <div class="card__information">
            <h3
              class="card__heading system-font"
              
            >
              <a
                href="/products/invisible-cities-unisex-cargo"
                data-sound="true"
                id="StandardCardNoMediaLink-template--17607317717158__featured_collection_DCDJDH-8023499079846"
                class="full-unstyled-link"

                aria-labelledby="StandardCardNoMediaLink-template--17607317717158__featured_collection_DCDJDH-8023499079846 NoMediaStandardBadge-template--17607317717158__featured_collection_DCDJDH-8023499079846"
              >
                INVISIBLE CITIES Unisex Cargo
              </a>
            </h3>
          </div>
          
          <div class="card__badge bottom left"><span
                id="NoMediaStandardBadge-template--17607317717158__featured_collection_DCDJDH-8023499079846"
                class="badge badge--bottom-left color-scheme-3"
              >Sold out</span></div>
          
        </div>
      </div>
      <div class="card__content">
        <div class="card__information">
          <h3
            class="card__heading system-font h5"
            
              id="title-template--17607317717158__featured_collection_DCDJDH-8023499079846"
            
          >
            <a
              href="/products/invisible-cities-unisex-cargo"
              id="CardLink-template--17607317717158__featured_collection_DCDJDH-8023499079846"
              class="full-unstyled-link"
              data-sound="true"
              aria-labelledby="CardLink-template--17607317717158__featured_collection_DCDJDH-8023499079846 Badge-template--17607317717158__featured_collection_DCDJDH-8023499079846"
            >
              INVISIBLE CITIES Unisex Cargo
            </a>
          </h3>
          <div class="card-information"><span class="caption-large light"></span>
<div
    class="
      price  price--sold-out price--on-sale"
  >
    <div class="price__container"><div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span class="price-item price-item--regular">
            ₹ 1,999.00
          </span></div>
      <div class="price__sale">
          <span class="visually-hidden visually-hidden--inline">Regular price</span>
          <span>
            <s class="price-item price-item--regular">
              
                ₹ 2,199.00
              
            </s>
          </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
        <span class="price-item price-item--sale price-item--last">
          ₹ 1,999.00
        </span>
      </div>
      <small class="unit-price caption hidden">
        <span class="visually-hidden">Unit price</span>
        <span class="price-item price-item--last">
          <span></span>
          <span aria-hidden="true">/</span>
          <span class="visually-hidden">&nbsp;per&nbsp;</span>
          <span>
          </span>
        </span>
      </small>
    </div></div>


            <div class="pop-club-listing" price="1999.00" prodId="8023499079846"></div></div>
        </div>
        
        
        <div class="card__badge bottom left"><span
              id="Badge-template--17607317717158__featured_collection_DCDJDH-8023499079846"
              class="badge badge--bottom-left color-scheme-3"
            >Sold out</span></div>
      </div>
    </div>
  </div>
          </li></ul></slider-component></div>
</div>


</section><div id="shopify-section-template--17607317717158__marquee_section_tkkykM" class="shopify-section">


<div class="marquee-container">
  <div class="banner-marquee">
    <h5>OUR FLEX FAM IS NOW 100K STRONG</h5>
    <h5>✸</h5>
    <h5>OUR FLEX FAM IS NOW 100K STRONG</h5>
    <h5>✸</h5>
    <h5>OUR FLEX FAM IS NOW 100K STRONG</h5>
    <h5>✸</h5>
    <h5>OUR FLEX FAM IS NOW 100K STRONG</h5>
    <h5>✸</h5>
    <h5>OUR FLEX FAM IS NOW 100K STRONG</h5>
    <h5>✸</h5>
    <h5>OUR FLEX FAM IS NOW 100K STRONG</h5>
  </div>
</div>
</div><div id="shopify-section-template--17607317717158__instagram_grid_n4wGXG" class="shopify-section">

<style>
   .testimonials{
    margin: 3rem 0;
  }
  .testimonials-card {
    position: relative;
    border-radius: 8px;
    min-width: 80vw;
    margin-right: 5px;
  }  
  .testimonials-card .testimonials-img {
    width: 100%;
    border-radius: 8px;
    aspect-ratio: 1/1;
    object-fit: cover;
  }

  .testimonials-overlay {
    background-image: linear-gradient(180deg, #0b0b0b00, #0a0a0ac4 48%, #0a0a0a);
    width: 100%;
    bottom: 0;
    height: 14rem;
    border-radius: 8px;
    display: block !important;
    position: absolute;
  }

  .testimonials-review {
    position: absolute;
    bottom: 2rem;
    left: 2rem;
    margin: 0;
    padding: 0;
  }

  .testimonials-name {
    margin: 0;
    padding: 0;
    color: #f6f6f6;
    font-size: 22px;
  }

  .testimonials-text {
    margin: 0;
    padding: 0;
    color: #f6f6f6;
    font-size: 12px;
  }

  .testimonials-handle {
    margin: 0;
    padding: 0;
    color: #f6f6f6;
    font-size: 12px;
    opacity: 0.5;
  }

  /* Slider-specific styles */
  .testimonials-slider {
    display: flex;
    overflow-x: auto;
    white-space: nowrap;
    scroll-snap-type: x mandatory;
    -webkit-overflow-scrolling: touch;
  }

  .testimonials-card {
    scroll-snap-align: start;
  }
  .testimonials-slider::-webkit-scrollbar {
    display: none;
  }

  .testimonials-slider {
    -ms-overflow-style: none;
    scrollbar-width: none;
  }
  .testimonials-tick{
    display: flex;
    gap: 3px;
    align-items: center;
  }
  .testimonials-tick img{
    width: 1.8rem;
  }
  .head-section{
    margin-bottom: 1rem;
  }
  @media screen and (min-width: 598px){
    .testimonials-card{
      min-width: 300px;
    }        
  }
  @media screen and (min-width:749px){
    .testimonials{
      margin: 5rem 0;
    }
    .head-section{
      margin-bottom: 2rem;      
    }
  }
</style>

<div class="testimonials page-width">
  <h2 class="head-section">WHO'S FLEXIN'</h2>
  <div class="testimonials-slider">
    
      <a href="/products/did-i-imagine-it-varsity-jacket" class="testimonials-card">
        <img class="testimonials-img"
          src="//wtflex.in/cdn/shop/files/wtflex-vashu.jpg?v=1728136444"
          alt="Vashu Jain"
        >
        <div class="testimonials-overlay"></div>
        <div class="testimonials-review">
          <h2 class="testimonials-name">Vashu Jain</h2>
          <div class="testimonials-tick">
            <p class="testimonials-handle">@vashu_jain_</p>
            
              <img src="https://cdn.shopify.com/s/files/1/0615/4551/3126/files/Instagram_Verified_Icon_72cbe0e4-c9e3-40c0-bc8d-d21c4defae27.png">
            
          </div>
        </div>
      </a>
    
      <a href="/products/impulsive-varsity-jacket" class="testimonials-card">
        <img class="testimonials-img"
          src="//wtflex.in/cdn/shop/files/wtflex-sid.jpg?v=1728136444"
          alt="Siddharth Nigam"
        >
        <div class="testimonials-overlay"></div>
        <div class="testimonials-review">
          <h2 class="testimonials-name">Siddharth Nigam</h2>
          <div class="testimonials-tick">
            <p class="testimonials-handle">@thesiddharthnigam</p>
            
              <img src="https://cdn.shopify.com/s/files/1/0615/4551/3126/files/Instagram_Verified_Icon_72cbe0e4-c9e3-40c0-bc8d-d21c4defae27.png">
            
          </div>
        </div>
      </a>
    
      <a href="/products/the-great-escape-heavyweight-t-shirt" class="testimonials-card">
        <img class="testimonials-img"
          src="//wtflex.in/cdn/shop/files/wtflex-devish.jpg?v=1728136444"
          alt="Devish Ahuja"
        >
        <div class="testimonials-overlay"></div>
        <div class="testimonials-review">
          <h2 class="testimonials-name">Devish Ahuja</h2>
          <div class="testimonials-tick">
            <p class="testimonials-handle">@devishahuja23</p>
            
              <img src="https://cdn.shopify.com/s/files/1/0615/4551/3126/files/Instagram_Verified_Icon_72cbe0e4-c9e3-40c0-bc8d-d21c4defae27.png">
            
          </div>
        </div>
      </a>
    
      <a href="/products/pink-natural-rascal-bowling-shirt" class="testimonials-card">
        <img class="testimonials-img"
          src="//wtflex.in/cdn/shop/files/wtflex-toshar.jpg?v=1728136443"
          alt="Toshar Thakral"
        >
        <div class="testimonials-overlay"></div>
        <div class="testimonials-review">
          <h2 class="testimonials-name">Toshar Thakral</h2>
          <div class="testimonials-tick">
            <p class="testimonials-handle">@tosharthakral</p>
            
              <img src="https://cdn.shopify.com/s/files/1/0615/4551/3126/files/Instagram_Verified_Icon_72cbe0e4-c9e3-40c0-bc8d-d21c4defae27.png">
            
          </div>
        </div>
      </a>
    
      <a href="/products/black-poisoned-youth-bowling-shirt" class="testimonials-card">
        <img class="testimonials-img"
          src="//wtflex.in/cdn/shop/files/wtflex-ashish.jpg?v=1728136444"
          alt="Ashish Bhatia"
        >
        <div class="testimonials-overlay"></div>
        <div class="testimonials-review">
          <h2 class="testimonials-name">Ashish Bhatia</h2>
          <div class="testimonials-tick">
            <p class="testimonials-handle">@ashishbhatiaofficial</p>
            
              <img src="https://cdn.shopify.com/s/files/1/0615/4551/3126/files/Instagram_Verified_Icon_72cbe0e4-c9e3-40c0-bc8d-d21c4defae27.png">
            
          </div>
        </div>
      </a>
    
      <a href="/products/run-or-burn-varsity-jacket" class="testimonials-card">
        <img class="testimonials-img"
          src="//wtflex.in/cdn/shop/files/wtflex-rajvee.png?v=1728136445"
          alt="Rajvee Gandhi"
        >
        <div class="testimonials-overlay"></div>
        <div class="testimonials-review">
          <h2 class="testimonials-name">Rajvee Gandhi</h2>
          <div class="testimonials-tick">
            <p class="testimonials-handle">@rxjvee</p>
            
              <img src="https://cdn.shopify.com/s/files/1/0615/4551/3126/files/Instagram_Verified_Icon_72cbe0e4-c9e3-40c0-bc8d-d21c4defae27.png">
            
          </div>
        </div>
      </a>
    
      <a href="/products/massacre-bowling-shirt" class="testimonials-card">
        <img class="testimonials-img"
          src="//wtflex.in/cdn/shop/files/wtflex-raunak.jpg?v=1728136443"
          alt="Raunak Kumar"
        >
        <div class="testimonials-overlay"></div>
        <div class="testimonials-review">
          <h2 class="testimonials-name">Raunak Kumar</h2>
          <div class="testimonials-tick">
            <p class="testimonials-handle">@raunakspam</p>
            
              <img src="https://cdn.shopify.com/s/files/1/0615/4551/3126/files/Instagram_Verified_Icon_72cbe0e4-c9e3-40c0-bc8d-d21c4defae27.png">
            
          </div>
        </div>
      </a>
    
      <a href="/products/did-i-imagine-it-varsity-jacket" class="testimonials-card">
        <img class="testimonials-img"
          src="//wtflex.in/cdn/shop/files/wtflex-gagan.jpg?v=1728136443"
          alt="Gagan Arora"
        >
        <div class="testimonials-overlay"></div>
        <div class="testimonials-review">
          <h2 class="testimonials-name">Gagan Arora</h2>
          <div class="testimonials-tick">
            <p class="testimonials-handle">@whogaganarora</p>
            
              <img src="https://cdn.shopify.com/s/files/1/0615/4551/3126/files/Instagram_Verified_Icon_72cbe0e4-c9e3-40c0-bc8d-d21c4defae27.png">
            
          </div>
        </div>
      </a>
    
  </div>
</div></div><section id="shopify-section-template--17607317717158__featured_blog_hqGW3Q" class="shopify-section"><link href="//wtflex.in/cdn/shop/t/81/assets/component-slider.css?v=102883555868012287761730879288" rel="stylesheet" type="text/css" media="all" />
<link href="//wtflex.in/cdn/shop/t/81/assets/component-card.css?v=165197172554000981641730879288" rel="stylesheet" type="text/css" media="all" />
<link href="//wtflex.in/cdn/shop/t/81/assets/component-article-card.css?v=112456510854580938541730879288" rel="stylesheet" type="text/css" media="all" />
<link href="//wtflex.in/cdn/shop/t/81/assets/section-featured-blog.css?v=81063036520117049401730879288" rel="stylesheet" type="text/css" media="all" />
<style data-shopify>.section-template--17607317717158__featured_blog_hqGW3Q-padding {
    padding-top: 30px;
    padding-bottom: 0px;
  }

  @media screen and (min-width: 750px) {
    .section-template--17607317717158__featured_blog_hqGW3Q-padding {
      padding-top: 40px;
      padding-bottom: 0px;
    }
  }</style><div class="blog color-scheme-1 gradient">
  <div class="page-width section-template--17607317717158__featured_blog_hqGW3Q-padding"><div class="title-wrapper-with-link title-wrapper--self-padded-tablet-down title-wrapper--no-top-margin">
        <h2
          id="SectionHeading-template--17607317717158__featured_blog_hqGW3Q"
          class="blog__title inline-richtext h2 scroll-trigger animate--slide-in"
          
            data-cascade
          
        >
          OUR BLOGS
        </h2><a
            href="/blogs/wtflex-tips"
            class="link underlined-link large-up-hide scroll-trigger animate--slide-in"
          >
            View all
          </a></div><slider-component class="slider-mobile-gutter scroll-trigger animate--slide-in">
      <ul
        id="Slider-template--17607317717158__featured_blog_hqGW3Q"
        class="blog__posts articles-wrapper contains-card contains-card--article contains-card--standard grid grid--peek grid--2-col-tablet grid--3-col-desktop slider slider--tablet"
        role="list"
      ><li
              id="Slide-template--17607317717158__featured_blog_hqGW3Q-1"
              class="blog__post grid__item article slider__slide slider__slide--full-width scroll-trigger animate--slide-in"
              
                data-cascade
                style="--animation-order: 1;"
              
            >
              
<div class="article-card-wrapper card-wrapper underline-links-hover">
    
    <div
      class="
        card article-card
        card--standard
        
         card--media
        
        
      "
      style="--ratio-percent: 60.24096385542169%;"
    >
      <div
        class="card__inner  color-scheme-2 gradient ratio"
        style="--ratio-percent: 60.24096385542169%;"
      ><div class="article-card__image-wrapper card__media">
            <div
              class="article-card__image media media--hover-effect"
              
            >
              
              <img
                srcset="//wtflex.in/cdn/shop/articles/Styling_Varsity_Jacket.webp?v=1730693034&width=165 165w,//wtflex.in/cdn/shop/articles/Styling_Varsity_Jacket.webp?v=1730693034&width=360 360w,//wtflex.in/cdn/shop/articles/Styling_Varsity_Jacket.webp?v=1730693034&width=533 533w,//wtflex.in/cdn/shop/articles/Styling_Varsity_Jacket.webp?v=1730693034&width=720 720w,//wtflex.in/cdn/shop/articles/Styling_Varsity_Jacket.webp?v=1730693034&width=1000 1000w,//wtflex.in/cdn/shop/articles/Styling_Varsity_Jacket.webp?v=1730693034 1280w
                "
                src="//wtflex.in/cdn/shop/articles/Styling_Varsity_Jacket.webp?v=1730693034&width=533"
                sizes="(min-width: 1600px) 750px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                alt="Ultimate Guide for Styling a Varsity Jacket!"
                class="motion-reduce"
                
                  loading="lazy"
                
                width="1280"
                height="720"
              >
              
            </div>
          </div><div class="card__content">
          <div class="card__information">
            <h3 class="card__heading h2">
              <a href="/blogs/wtflex-tips/ultimate-guide-for-styling-a-varsity-jacket" class="full-unstyled-link">
                Ultimate Guide for Styling a Varsity Jacket!
              </a>
            </h3>
            <div class="article-card__info caption-with-letter-spacing h5"></div><p class="article-card__excerpt rte-width">In this ultimate guide, we explore how to style the iconic varsity jacket across different looks, from retro to minimalist, and casual to bold. Learn how to pull off a...
</p><div class="article-card__footer"></div></div></div>
      </div>
      <div class="card__content">
        <div class="card__information">
          <h3 class="card__heading h2">
            <a href="/blogs/wtflex-tips/ultimate-guide-for-styling-a-varsity-jacket" class="full-unstyled-link">
              Ultimate Guide for Styling a Varsity Jacket!
            </a>
          </h3>
          <div class="article-card__info caption-with-letter-spacing h5"></div><p class="article-card__excerpt rte-width">In this ultimate guide, we explore how to style the iconic varsity jacket across different looks, from retro to minimalist, and casual to bold. Learn how to pull off a...
</p><div class="article-card__footer"></div></div></div>
    </div>
  </div>
            </li><li
              id="Slide-template--17607317717158__featured_blog_hqGW3Q-2"
              class="blog__post grid__item article slider__slide slider__slide--full-width scroll-trigger animate--slide-in"
              
                data-cascade
                style="--animation-order: 2;"
              
            >
              
<div class="article-card-wrapper card-wrapper underline-links-hover">
    
    <div
      class="
        card article-card
        card--standard
        
         card--media
        
        
      "
      style="--ratio-percent: 60.24096385542169%;"
    >
      <div
        class="card__inner  color-scheme-2 gradient ratio"
        style="--ratio-percent: 60.24096385542169%;"
      ><div class="article-card__image-wrapper card__media">
            <div
              class="article-card__image media media--hover-effect"
              
            >
              
              <img
                srcset="//wtflex.in/cdn/shop/articles/streetwear_outfit.jpg?v=1730693046&width=165 165w,//wtflex.in/cdn/shop/articles/streetwear_outfit.jpg?v=1730693046&width=360 360w,//wtflex.in/cdn/shop/articles/streetwear_outfit.jpg?v=1730693046&width=533 533w,//wtflex.in/cdn/shop/articles/streetwear_outfit.jpg?v=1730693046&width=720 720w,//wtflex.in/cdn/shop/articles/streetwear_outfit.jpg?v=1730693046&width=1000 1000w,//wtflex.in/cdn/shop/articles/streetwear_outfit.jpg?v=1730693046&width=1500 1500w,//wtflex.in/cdn/shop/articles/streetwear_outfit.jpg?v=1730693046 5184w
                "
                src="//wtflex.in/cdn/shop/articles/streetwear_outfit.jpg?v=1730693046&width=533"
                sizes="(min-width: 1600px) 750px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                alt="How to Perfectly Style a Streetwear Outfit"
                class="motion-reduce"
                
                  loading="lazy"
                
                width="5184"
                height="3456"
              >
              
            </div>
          </div><div class="card__content">
          <div class="card__information">
            <h3 class="card__heading h2">
              <a href="/blogs/wtflex-tips/how-to-perfectly-style-a-streetwear-outfit" class="full-unstyled-link">
                How to Perfectly Style a Streetwear Outfit
              </a>
            </h3>
            <div class="article-card__info caption-with-letter-spacing h5"></div><p class="article-card__excerpt rte-width">In this guide, we break down the essentials of styling the perfect streetwear outfit, whether you're new to the game or a seasoned streetwear enthusiast. Discover how to build a...
</p><div class="article-card__footer"></div></div></div>
      </div>
      <div class="card__content">
        <div class="card__information">
          <h3 class="card__heading h2">
            <a href="/blogs/wtflex-tips/how-to-perfectly-style-a-streetwear-outfit" class="full-unstyled-link">
              How to Perfectly Style a Streetwear Outfit
            </a>
          </h3>
          <div class="article-card__info caption-with-letter-spacing h5"></div><p class="article-card__excerpt rte-width">In this guide, we break down the essentials of styling the perfect streetwear outfit, whether you're new to the game or a seasoned streetwear enthusiast. Discover how to build a...
</p><div class="article-card__footer"></div></div></div>
    </div>
  </div>
            </li><li
              id="Slide-template--17607317717158__featured_blog_hqGW3Q-3"
              class="blog__post grid__item article slider__slide slider__slide--full-width scroll-trigger animate--slide-in"
              
                data-cascade
                style="--animation-order: 3;"
              
            >
              
<div class="article-card-wrapper card-wrapper underline-links-hover">
    
    <div
      class="
        card article-card
        card--standard
        
         card--media
        
        
      "
      style="--ratio-percent: 60.24096385542169%;"
    >
      <div
        class="card__inner  color-scheme-2 gradient ratio"
        style="--ratio-percent: 60.24096385542169%;"
      ><div class="article-card__image-wrapper card__media">
            <div
              class="article-card__image media media--hover-effect"
              
            >
              
              <img
                srcset="//wtflex.in/cdn/shop/articles/pexels-mart-production-9558895.jpg?v=1703647598&width=165 165w,//wtflex.in/cdn/shop/articles/pexels-mart-production-9558895.jpg?v=1703647598&width=360 360w,//wtflex.in/cdn/shop/articles/pexels-mart-production-9558895.jpg?v=1703647598&width=533 533w,//wtflex.in/cdn/shop/articles/pexels-mart-production-9558895.jpg?v=1703647598&width=720 720w,//wtflex.in/cdn/shop/articles/pexels-mart-production-9558895.jpg?v=1703647598&width=1000 1000w,//wtflex.in/cdn/shop/articles/pexels-mart-production-9558895.jpg?v=1703647598 1280w
                "
                src="//wtflex.in/cdn/shop/articles/pexels-mart-production-9558895.jpg?v=1703647598&width=533"
                sizes="(min-width: 1600px) 750px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)"
                alt="Best Oversized T-shirts for Women"
                class="motion-reduce"
                
                  loading="lazy"
                
                width="1280"
                height="853"
              >
              
            </div>
          </div><div class="card__content">
          <div class="card__information">
            <h3 class="card__heading h2">
              <a href="/blogs/wtflex-tips/oversized-tees-women" class="full-unstyled-link">
                Best Oversized T-shirts for Women
              </a>
            </h3>
            <div class="article-card__info caption-with-letter-spacing h5"></div><p class="article-card__excerpt rte-width">Bonjour Flexicons!If there's one fashion item that effortlessly marries comfort with style, it's the oversized T-shirt. From a casual look to a semi-formal look, you can rock the vibe with...
</p><div class="article-card__footer"></div></div></div>
      </div>
      <div class="card__content">
        <div class="card__information">
          <h3 class="card__heading h2">
            <a href="/blogs/wtflex-tips/oversized-tees-women" class="full-unstyled-link">
              Best Oversized T-shirts for Women
            </a>
          </h3>
          <div class="article-card__info caption-with-letter-spacing h5"></div><p class="article-card__excerpt rte-width">Bonjour Flexicons!If there's one fashion item that effortlessly marries comfort with style, it's the oversized T-shirt. From a casual look to a semi-formal look, you can rock the vibe with...
</p><div class="article-card__footer"></div></div></div>
    </div>
  </div>
            </li></ul><div class="slider-buttons">
          <button
            type="button"
            class="slider-button slider-button--prev"
            name="previous"
            aria-label="Slide left"
          >
            <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

          </button>
          <div class="slider-counter caption">
            <span class="slider-counter--current">1</span>
            <span aria-hidden="true"> / </span>
            <span class="visually-hidden">of</span>
            <span class="slider-counter--total">3</span>
          </div>
          <button
            type="button"
            class="slider-button slider-button--next"
            name="next"
            aria-label="Slide right"
          >
            <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

          </button>
        </div></slider-component><div
        class="blog__view-all center small-hide medium-hide scroll-trigger animate--slide-in"
        
          data-cascade
        
      >
        <a
          href="/blogs/wtflex-tips"
          id="ViewAll-template--17607317717158__featured_blog_hqGW3Q"
          class="viewAllStyle blog__button button"
          aria-labelledby="ViewAll-template--17607317717158__featured_blog_hqGW3Q SectionHeading-template--17607317717158__featured_blog_hqGW3Q"
        >
          View all
        </a>
      </div></div>
</div>


<style> #shopify-section-template--17607317717158__featured_blog_hqGW3Q .slider-buttons {display: none;} #shopify-section-template--17607317717158__featured_blog_hqGW3Q .slider.slider--tablet .slider__slide {padding-top: 0;} </style></section><div id="shopify-section-template--17607317717158__small_marquee_fgcCCR" class="shopify-section">
<style>
  .topMarqDiv {
    background: #000;
    width: 100%;
    overflow-x: hidden;
    overflow-y: hidden;
    z-index: 0;
    position: relative;
  }
  .topMarq div {
    width: 100%;
    white-space: nowrap;
    letter-spacing: 0.3px;
    margin-right: 3px;
  }
  .topMarq {    
    background: #000 !important;
    height: 3rem !important;
    min-width: 280vw !important;
    font-size: 3vw !important;
    font-weight: normal;
    animation: bannermove 20s linear infinite !important;
    position: relative;
    overflow-x: hidden;
    overflow-y: hidden;
    line-height: 36px;
     color: #fafafa;
    text-transform: uppercase;
    display: flex;
    justify-content: space-between;
   align-items: center;
  }
  .topMarq:hover {
    animation-play-state: paused;
  }
  @media screen and (min-width: 750px){
    .topMarq{
      font-size: 2vw !important;
      height: 2rem !important;
      padding: 1.5rem 0;
    }
  }
  @media screen and (min-width: 1200px){
    .topMarq{
      font-size: 1.5vw !important;      
      padding: 2rem 0;
    }
  }
</style>

<div class="topMarqDiv">
  <div class="topMarq">
    <div>✦ FLAT 10% OFF for your first purchase! ✦ Use Code : NEW10</div>
    <div>✦ FLAT 10% OFF for your first purchase! ✦ Use Code : NEW10</div>
    <div>✦ FLAT 10% OFF for your first purchase! ✦ Use Code : NEW10</div>
    <div>✦ FLAT 10% OFF for your first purchase! ✦ Use Code : NEW10</div>
  </div>
</div>
</div>
    </main>
    <style>
  .textHide{
    display: none !important;
  }
  .w-auto{
    width: auto;
    height: auto;
  }
  .icon-txt{
    font-size: 12px;
    padding: 0.5rem 2rem;
    text-wrap: nowrap;
    cursor: pointer;
  }
  .bb-modal {
    height: 100%;
    position: fixed;
    z-index: 4;
    left: 0;
    top: 0;
    width: 100%;
    overflow: hidden;
    background-color: rgba(0,0,0,0.8);
    transform: translateY(100%);
    transition: transform 0.4s ease-in-out;
  }
  .bb-modal-content {
    position: relative;
    margin: auto;
    padding: 20px;
    width: 100%;
    height: 100%;
    background: #fff;
  }
  .bb-modal-close {
    position: absolute;
    top: 10px;
    right: 10px;
    color: #000;
    font-size: 24px;
    cursor: pointer;
  }
  .bottom-bar__container {
    width: 90%;
    display: flex;
    justify-content: center;
    align-items: center;
    height: auto;
    margin: auto;
  }
  .search-icon-head{
    cursor: pointer;
  }
  .bottom-bar__container .header__icon{
    color: white;
  }
  .bottom-bar {
    position: fixed;
    bottom: 1rem;
    z-index: 2;
    width: 95%;
    margin: auto;
    padding: 0.8rem;
    background: black;
    border-radius: 6px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  .bottom-bar-ul {
    display: flex;
    margin: 0;
    padding: 0;
    height: 5vh;
    gap: 1rem;
    justify-content: space-between;
    align-items: center;
  }
  .bottom-bar-ul > li {
    list-style: none;
    color: white;
    /* padding: 1rem; */
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 30px;
  }
  .bottom-bar-ul > li > div {
    /* width: 50px; */
    color: white;
    /* display: flex;
    justify-content: center; */
    /* padding: 1rem; */
  }
  #menu-item-nav .menu-jcc{
    justify-content: left;
  }
  .bottom-bar-ul > li > a {
    text-decoration: none;
    color: white;
  }
  .customHeadIcon{
    display: flex;
    align-items: center;
  }
  .jcc{
    justify-content: center;
  }
  .customHeadIcon .wrapHead{
    /* display: flex;
    position: absolute;
    width: auto;
    height: auto;
    gap: 5px;
    background: black;
    padding: 0.5rem 1.5rem; */
    color: white;
    /* border-radius: 50px; */
  }
  .customHeadIcon .wrapHead svg{
    /* height: 1.4rem !important; */
    /* width: 1.8rem !important; */
    position: static !important;
  }
  .search-icon-head, .cart-icon-head, .account-icon-head{
    padding: 0.5rem 1.5rem;
    color: white;
    border-radius: 50px;
    text-decoration: none;
  }
  .cart-icon-head, .header__icon--account{
    padding: 0.5rem 1.5rem 1rem 1.5rem;
  }

  .cart-ctm{
    height: auto;
    margin-right: 0;
    color: white;
    text-decoration: none;
  }
  .countHide .cart-count-bubble{
    display: none !important;
  }
  @media screen and (max-width: 350px){
    .icon-txt{
      font-size: 11px;
    }
  }
  @media screen and (min-width: 749px) {
    .bottom-bar__container {
      width: 30%;
      height: auto;
      margin: auto;
    }

    .bb-modal-content {
      width: 60%;
      height: 75%;
      top: 50%;
      position: absolute;
      left: 50%;
      transform: translate(-50%, -50%);
      border-radius: 8px;
    }
    .bottom-bar {
      position: fixed;
      bottom: 2rem;
      z-index: 9;
      width: 50%;
      margin: auto;
      padding: 1rem;
      background: black;
      border-radius: 8px;
    }
  }
  @media screen and (min-width: 990px){
    .bb-modal{
      background-color: transparent;
    }
  }
  @media screen and (min-width: 1100px){
    .bb-modal-content{
      width: 40%;
    }
    .bottom-bar {
      width: 35%;
    }
  }
</style>

    <!-- BEGIN sections: footer-group -->
<section id="shopify-section-sections--17607312605350__newsletter_YcgRww" class="shopify-section shopify-section-group-footer-group section"><link href="//wtflex.in/cdn/shop/t/81/assets/component-newsletter.css?v=125058543000574891611730879288" rel="stylesheet" type="text/css" media="all" />
<link href="//wtflex.in/cdn/shop/t/81/assets/newsletter-section.css?v=36077464573916814431730879288" rel="stylesheet" type="text/css" media="all" />
<style data-shopify>.custom-news-wrapper{
      padding: 0!important;
    }
    .section-sections--17607312605350__newsletter_YcgRww-padding {
      padding-top: 24px;
      padding-bottom: 24px;
    }
  @media screen and (max-width: 750px) {
    .custom-news-wrapper{
      padding: 0rem!important;
    }
  }
    @media screen and (min-width: 750px) {
      .section-sections--17607312605350__newsletter_YcgRww-padding {
        padding-top: 32px;
        padding-bottom: 32px;
      }
    }</style><div class="newsletter page-width  section-sections--17607312605350__newsletter_YcgRww-padding">
  <div class="newsletter__wrapper custom-news-wrapper color-scheme-1 gradient content-container isolate content-container--full-width"><div >
            <form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8" class="newsletter-form"><input type="hidden" name="form_type" value="customer" /><input type="hidden" name="utf8" value="✓" />
              <input type="hidden" name="contact[tags]" value="newsletter">
              <div
                class="newsletter-form__field-wrapper scroll-trigger animate--slide-in"
                
                  data-cascade
                  style="--animation-order: 1;"
                
              >
                <div class="field">
                  <input
                    id="NewsletterForm--sections--17607312605350__newsletter_YcgRww"
                    type="email"
                    name="contact[email]"
                    class="field__input"
                    value=""
                    aria-required="true"
                    autocorrect="off"
                    autocapitalize="off"
                    autocomplete="email"
                    
                    placeholder="WRITE YOUR MAIL HERE"
                    required
                  >
                  <label class="field__label" for="NewsletterForm--sections--17607312605350__newsletter_YcgRww">
                    WRITE YOUR MAIL HERE
                  </label>
                  <button
                    type="submit"
                    class="newsletter-form__button field__button"
                    name="commit"
                    id="Subscribe"
                    aria-label="Subscribe"
                  >
                    <!-- <svg
  viewBox="0 0 14 10"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="icon icon-arrow"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>
 -->
                    SIGN UP
                  </button>
                </div></div></form>
          </div></div>
</div>


</section><div id="shopify-section-sections--17607312605350__footer" class="shopify-section shopify-section-group-footer-group">
<link href="//wtflex.in/cdn/shop/t/81/assets/section-footer.css?v=104635468899919404191730879288" rel="stylesheet" type="text/css" media="all" />
<link href="//wtflex.in/cdn/shop/t/81/assets/component-newsletter.css?v=125058543000574891611730879288" rel="stylesheet" type="text/css" media="all" />
<link href="//wtflex.in/cdn/shop/t/81/assets/component-list-menu.css?v=151968516119678728991730879288" rel="stylesheet" type="text/css" media="all" />
<link href="//wtflex.in/cdn/shop/t/81/assets/component-list-payment.css?v=69253961410771838501730879288" rel="stylesheet" type="text/css" media="all" />
<link href="//wtflex.in/cdn/shop/t/81/assets/component-list-social.css?v=35792976012981934991730879288" rel="stylesheet" type="text/css" media="all" />
<style data-shopify>.footer {
    margin-top: 0px;
  }

  .section-sections--17607312605350__footer-padding {
    padding-top: 15px;
    padding-bottom: 70px;
  }

  @media screen and (min-width: 750px) {
    .footer {
      margin-top: 0px;
    }

    .section-sections--17607312605350__footer-padding {
      padding-top: 20px;
      padding-bottom: 0px !important;
    }
  }
  @media screen and (max-width: 750px){
    
  }</style>
  <footer class="footer color-scheme-1 gradient section-sections--17607312605350__footer-padding"><div class="footer__content-top page-width"><div
            class="footer__blocks-wrapper grid grid--1-col grid--2-col grid--4-col-tablet  scroll-trigger animate--slide-in"
            
              data-cascade
            
          ><div
                class="footer-block grid__item footer-block--menu scroll-trigger animate--slide-in"
                
                
                  data-cascade
                  style="--animation-order: 1;"
                
              ><h2 class="footer-block__heading inline-richtext">EVERYTHING</h2><ul class="footer-block__details-content list-unstyled"><li>
                            <a
                              href="/collections/oversized-t-shirt"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              Oversized T-shirt
                            </a>
                          </li><li>
                            <a
                              href="/collections/denims-by-wtf"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              Denims By WTF
                            </a>
                          </li><li>
                            <a
                              href="/collections/the-bottom-trends"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              Bottom Trends
                            </a>
                          </li><li>
                            <a
                              href="/collections/winter-essentials"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              Winter Essentials
                            </a>
                          </li></ul></div><div
                class="footer-block grid__item footer-block--menu scroll-trigger animate--slide-in"
                
                
                  data-cascade
                  style="--animation-order: 2;"
                
              ><h2 class="footer-block__heading inline-richtext">MANUAL</h2><ul class="footer-block__details-content list-unstyled"><li>
                            <a
                              href="/policies/contact-information"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              Contact Us
                            </a>
                          </li><li>
                            <a
                              href="/apps/ils/tracking/"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              Track Now
                            </a>
                          </li><li>
                            <a
                              href="https://what-the-flex.myshopify.com/apps/return_prime"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              Exchange
                            </a>
                          </li><li>
                            <a
                              href="/account"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              Account Page
                            </a>
                          </li></ul></div><div
                class="footer-block grid__item footer-block--menu scroll-trigger animate--slide-in"
                
                
                  data-cascade
                  style="--animation-order: 3;"
                
              ><h2 class="footer-block__heading inline-richtext">TERMS</h2><ul class="footer-block__details-content list-unstyled"><li>
                            <a
                              href="/policies/privacy-policy"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              Privacy Policy
                            </a>
                          </li><li>
                            <a
                              href="/policies/refund-policy"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              Exchange Policy
                            </a>
                          </li><li>
                            <a
                              href="/policies/shipping-policy"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              Shipping Policy
                            </a>
                          </li><li>
                            <a
                              href="/policies/terms-of-service"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              Terms of Service
                            </a>
                          </li></ul></div><div
                class="footer-block grid__item footer-block--menu scroll-trigger animate--slide-in"
                
                
                  data-cascade
                  style="--animation-order: 4;"
                
              ><h2 class="footer-block__heading inline-richtext">AFTERHOURS</h2><ul class="footer-block__details-content list-unstyled"><li>
                            <a
                              href="https://www.instagram.com/wtflex.in/"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              Instagram
                            </a>
                          </li><li>
                            <a
                              href="https://www.facebook.com/p/Wtflexin-India-100093320916982/"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              Facebook
                            </a>
                          </li><li>
                            <a
                              href="https://www.snapchat.com/add/wtflex.in"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              Snapchat
                            </a>
                          </li><li>
                            <a
                              href="https://in.pinterest.com/whattheflex0/"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              Pinterest
                            </a>
                          </li></ul></div></div><div
          class="footer-block--newsletter scroll-trigger animate--slide-in"
          
            data-cascade
          
        ></div>
      </div><div
    class="footer__content-bottom scroll-trigger animate--slide-in"
    
      data-cascade
    
  >
    <div class="footer__content-bottom-wrapper page-width">
      <div class="footer__column footer__localization isolate"></div>
      <div class="footer__column footer__column--info"><div class="footer__payment">
            <span class="visually-hidden">Payment methods</span>
            <ul class="list list-payment" role="list"></ul>
          </div></div>
    </div>
    <div class="footer__content-bottom-wrapper page-width">
      <div class="footer__copyright caption">
        <small class="copyright__content"
          >&copy; 2025, <a href="/" title="">WHAT THE FLEX</a></small>

        <!-- <small class="copyright__content"><a target="_blank" rel="nofollow" href="https://www.shopify.com?utm_campaign=poweredby&amp;utm_medium=shopify&amp;utm_source=onlinestore">Powered by Shopify</a></small> --><ul class="policies list-unstyled"><li>
                  <small class="copyright__content"
                    ><a href="/policies/refund-policy">Refund policy</a></small
                  >
                </li><li>
                  <small class="copyright__content"
                    ><a href="/policies/privacy-policy">Privacy policy</a></small
                  >
                </li><li>
                  <small class="copyright__content"
                    ><a href="/policies/terms-of-service">Terms of service</a></small
                  >
                </li><li>
                  <small class="copyright__content"
                    ><a href="/policies/shipping-policy">Shipping policy</a></small
                  >
                </li><li>
                  <small class="copyright__content"
                    ><a href="/policies/contact-information">Contact information</a></small
                  >
                </li><li>
              <small class="copyright__content"><a href="https://elanine.com/">Designed By Elanine Creatives</a></small>
            </li>
          </ul></div>
    </div>
  </div>
</footer>


</div>
<!-- END sections: footer-group -->

    <ul hidden>
      <li id="a11y-refresh-page-message">Choosing a selection results in a full page refresh.</li>
      <li id="a11y-new-window-message">Opens in a new window.</li>
    </ul>

    <script>
      window.shopUrl = 'https://wtflex.in';
      window.routes = {
        cart_add_url: '/cart/add',
        cart_change_url: '/cart/change',
        cart_update_url: '/cart/update',
        cart_url: '/cart',
        predictive_search_url: '/search/suggest',
      };

      window.cartStrings = {
        error: `There was an error while updating your cart. Please try again.`,
        quantityError: `You can only add [quantity] of this item to your cart.`,
      };

      window.variantStrings = {
        addToCart: `Add to cart`,
        soldOut: `Sold out`,
        unavailable: `Unavailable`,
        unavailable_with_option: `[value] - Unavailable`,
      };

      window.quickOrderListStrings = {
        itemsAdded: `[quantity] items added`,
        itemAdded: `[quantity] item added`,
        itemsRemoved: `[quantity] items removed`,
        itemRemoved: `[quantity] item removed`,
        viewCart: `View cart`,
        each: `[money]/ea`,
        min_error: `This item has a minimum of [min]`,
        max_error: `This item has a maximum of [max]`,
        step_error: `You can only add this item in increments of [step]`,
      };

      window.accessibilityStrings = {
        imageAvailable: `Image [index] is now available in gallery view`,
        shareSuccess: `Link copied to clipboard`,
        pauseSlideshow: `Pause slideshow`,
        playSlideshow: `Play slideshow`,
        recipientFormExpanded: `Gift card recipient form expanded`,
        recipientFormCollapsed: `Gift card recipient form collapsed`,
        countrySelectorSearchCount: `[count] countries/regions found`,
      };
    </script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        // Get the audio element
        let sound = document.getElementById('brickSound');
        if (!sound) {
          console.error('Audio element not found');
          return;
        }

        // Function to play the sound
        function playSound() {
          sound.play().catch(function(error) {
            console.error('Error playing sound:', error);
          });
        }

        // Get all buttons with the data-sound attribute
        // var buttons = document.querySelectorAll('button[data-sound="true"], a[data-sound="true"]');
        let buttons = document.querySelectorAll('button[data-sound="true"]');
        buttons.forEach(function(button) {
          button.addEventListener('click', function(event) {
            // Play the sound
            playSound();
          });
        });
      });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.9.6/lottie.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.9.6/lottie.min.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        let animationContainer = document.getElementById('lottie-animation');

        // Load the animation
        let animation = lottie.loadAnimation({
          container: animationContainer, // The container for the animation
          renderer: 'svg', // Use SVG renderer
          loop: false, // Play animation once
          autoplay: false, // Don't start automatically
          path: 'https://lottie.host/0360e2b8-5c7a-4eeb-8c93-206de6d6e0d1/wgoA9Wgg0N.json' // The animation JSON URL
        });

        // Function to show and play the animation
        function playAnimation() {
          animationContainer.style.display = 'block'; // Make animation container visible
          animation.goToAndStop(0, true); // Restart animation from the beginning
          animation.play(); // Play animation
          setTimeout(() => {
            animationContainer.style.display = 'none'; // Hide after animation is done
          }, animation.totalFrames / animation.getDuration() * 1000); // Adjust timing based on animation length
        }

        // Select all buttons with ID matching 'ProductSubmitButton-'
        let buttons = document.querySelectorAll('[id^="ProductSubmitButton-"]');

        // Add event listener to each button
        buttons.forEach(function(button) {
          button.addEventListener('click', function() {
            if (!this.disabled) { // Ensure button is not disabled
              playAnimation();
            }
          });
        });
      });
    </script><script src="//wtflex.in/cdn/shop/t/81/assets/predictive-search.js?v=57209189334897115771730879288" defer="defer"></script><script>
      document.addEventListener("DOMContentLoaded", function() {
        if(document.getElementById("loaderLogo")){
          const loader = document.getElementById("loaderLogo");
          loader.style.display = "flex";
          setTimeout(function() {
              loader.style.display = "none";
          }, 1500);
        }
      });
    </script>
    <script>
      console.log('Designed by:');
      console.log('Elanine Creatives');
      console.log('[elanine.com]');
    </script>
    <script>
  let token = null;
  let isDropdownVisible = false;

  function handleDrawer1() {
    const token = getValueFromCookiesOrLocalStorage(XGokwikCoreToken(window.merchantInfo.environment))
    if (token) {
      const kwikpassLoggedInElement = document.getElementById("icon-kwikpass");
      const crossIconElement = document.getElementById("icon-close-kwikpass")
      const drawerElement = document.getElementById("kwikpass-drawer-desktop")
      // display cross icon and hide icon-kwikpass if isDropdownVisible = true else display icon-kwikpass and hide cross icon
      if(isDropdownVisible){
        drawerElement.style.display = "none";
        crossIconElement.style.display="none";
        kwikpassLoggedInElement.style.display="flex";
      }else{
        drawerElement.style.display = "block";
        crossIconElement.style.display="flex";
        kwikpassLoggedInElement.style.display="none";
      }
      isDropdownVisible = !isDropdownVisible;
    }
  }

  function updateDOM(isKwikpassLogin = true) {
    token = getValueFromCookiesOrLocalStorage(XGokwikCoreToken(window.merchantInfo.environment));
    const isLogout = sessionStorage.getItem('isLogout');
    const phoneNumber = getValueFromCookiesOrLocalStorage('notify_phone_number');
    
    if ((!token && !isLogout) || (token && !phoneNumber)) {
       openIframe('kp_sso_token')
    }
    
    const drawerElement = document.getElementById("kwikpass-drawer-desktop")
    if(drawerElement){
      if(token){
      document.getElementById("kp-login-button-header-logo").style.display = "none"
      document.getElementById("loggedin-icons").style.display = "block"
      }else{
      document.getElementById("kp-login-button-header-logo").style.display = "flex"
      document.getElementById("loggedin-icons").style.display = "none"
      drawerElement.style.display = "none"
      }
    }
    
    // shopify logout
    const logoutLink = document.querySelectorAll('a[href*="/account/logout"]');
    logoutLink.forEach((element) => {
        element.addEventListener("click", (event) => {
          event.preventDefault()
          handleLogout()
        })
    });
    
    const logoutElement =  document.getElementById('logout-button-desktop')
    
    if(logoutElement) logoutElement.addEventListener('click', handleLogout);  
  }

   let isElementsWithAccountClickable = true;

    const elementsWithAccount = document.querySelectorAll('a[href="/account"]');
    elementsWithAccount.forEach((element) => {
        element.addEventListener('click', async (e) => {
          e.preventDefault();
         const customerId = getCustomerId()
         token = getValueFromCookiesOrLocalStorage(XGokwikCoreToken(window.merchantInfo.environment));
          if(token && customerId!=null){
            window.location.href = "/account"
          }else{
            handleKpAndShopifyLogin("/account")
          }
        });
    });


  /* This code is reusable to all merchants except breakpoint */
  
  // Add a click event listener to the document
  document.addEventListener('click', function(event) {
    const dropdownButton = document.getElementsByClassName('header--icon') ?. [0]  
    // Check if the clicked element is the dropdown button or inside the dropdown menu
      const isClickInsideDropdown = dropdownButton.contains(event.target);    
    // If the click is outside the dropdown, hide the dropdown
    const kwikpassLoggedInElement = document.getElementById("icon-kwikpass");
    const crossIconElement = document.getElementById("icon-close-kwikpass")
    const drawerElement = document.getElementById("kwikpass-drawer-desktop") 
    if (! isClickInsideDropdown && isDropdownVisible && token) {
    drawerElement.style.display = "none";
    crossIconElement.style.display = "none";
    kwikpassLoggedInElement.style.display = "flex";
    isDropdownVisible = ! isDropdownVisible;
    }
  });


  document.addEventListener('DOMContentLoaded', function() {
    updateDOM();
  });
  
  window.addEventListener('update-dom', function() {
    const kwikpassLoggedInElement = document.getElementById("icon-kwikpass");
    const crossIconElement = document.getElementById("icon-close-kwikpass")
    const drawerElement = document.getElementById("kwikpass-drawer-desktop")
    drawerElement.style.display = "none";
    crossIconElement.style.display="none";
    kwikpassLoggedInElement.style.display="flex";
    updateDOM();
  });
</script>

<script defer src="https://pdp.gokwik.co/kwikpass/kwikpass-core-functions-min.js"></script>
<script defer src="https://pdp.gokwik.co/kwikpass/plugin/build/kp-merchant-v2.js"></script>
<!-- Failed to render app block "15175833163494746514": app block path "shopify://apps/popcoins-loyalty-what-the-flex/blocks/pop_coin_embed/475e42ae-6fb6-461a-b9ed-3bde74ef82d8" does not exist --></body>
</html>
