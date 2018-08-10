/**
 * Copyright 2016 Google Inc. All rights reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
*/

// DO NOT EDIT THIS GENERATED OUTPUT DIRECTLY!
// This file should be overwritten as part of your build process.
// If you need to extend the behavior of the generated service worker, the best approach is to write
// additional code and include it using the importScripts option:
//   https://github.com/GoogleChrome/sw-precache#importscripts-arraystring
//
// Alternatively, it's possible to make changes to the underlying template file and then use that as the
// new base for generating output, via the templateFilePath option:
//   https://github.com/GoogleChrome/sw-precache#templatefilepath-string
//
// If you go that route, make sure that whenever you update your sw-precache dependency, you reconcile any
// changes made to this original template file with your modified copy.

// This generated service worker JavaScript will precache your site's resources.
// The code needs to be saved in a .js file at the top-level of your site, and registered
// from your pages in order to be used. See
// https://github.com/googlechrome/sw-precache/blob/master/demo/app/js/service-worker-registration.js
// for an example of how you can register this script and handle various service worker events.

/* eslint-env worker, serviceworker */
/* eslint-disable indent, no-unused-vars, no-multiple-empty-lines, max-nested-callbacks, space-before-function-paren, quotes, comma-spacing */
'use strict';

var precacheConfig = [["README.md","c847f5a2c3fe298b49a0f568c2f33e37"],["activites.php","5a649236d8010032613f2ff0511f01f6"],["composer.json","3e84599985303d5c94e258e7bd146ba4"],["composer.lock","a2f8587a1ba62c6548ff8a2e7e146945"],["composer.phar","5969d20761e89e8cffb8288c4587f699"],["contact.php","7e32f643dd1b7e50fb67a1ca94b85100"],["css/style.css","bc095a1978f2eb2adb669b488ac8a797"],["envoiMail.php","d133ee757840245ee25f1bc5790263ea"],["formations.php","d41d8cd98f00b204e9800998ecf8427e"],["img/Screen Shot 2018-07-30 at 15.12.38.png","72a9e5222877fe9312c68af3f94a8f10"],["img/UML.png","d468dc397febc82e6ad76937992832ff"],["img/UML.svg","812968445d5b9c324dca37b4cbdf5cb1"],["img/actiris.png","acdb3c1a1364ea0d4d272174b24cce56"],["img/bxl-formation.png","ffaa5c1e04c84505292e15552cfc1e27"],["img/bxl-region.png","07c5fdffb2db6cc40a55182026758d7a"],["img/ecole-devoirs.jpeg","dcbd8cf0faa11d506e97a144482d5010"],["img/educperma.jpeg","1d9157216dbb9b22482f6fbcf30b4a1a"],["img/fse-logo.gif","36c2b7a09312e5226e8fcf3a5e968969"],["img/fwb.png","5128324bd3b89025dc27decf994ca3d0"],["img/insertionsociopro.jpeg","59a492aa669f1de145cfe2c0a74677e8"],["img/k-fete.jpg","f638c8b53fc97bde438d89cfb36c61bb"],["img/lighthouse-home.png","4d10b57bb991f1d17d9974290769f417"],["img/logoChomhier.png","6173ecc922bea3c972ed0813fc8e1313"],["img/map.png","c796fbe531f73e7baa7cc99a7bd39ee4"],["img/screenshot_av.png","dc36af6d43deded2b88adb6e0a67129d"],["index.php","472389437354c620a29adb48bfedd77b"],["js/script.js","1eea18b383c86ff977f7c8f02c1d9d99"],["logs/logs.txt","55b7793b67128d315c2d024f3f158c61"],["mail.php","ed59e06667c05de5fc20b2ef76d064d3"],["manifest.json","2bd9d2ba7a599361b7853b3294d0d6aa"],["partiels/footer.php","b83f7c7223c6c2707fc89b86a820de65"],["partiels/header.php","ed714019a01ff2aa5ee9d5b66295c95e"],["partiels/mdp.php","b5abc62b2ffb5fd5d2dad81b9de384f2"],["remerciements.php","f41dd540657866b879e1a15e1cef08f3"],["traitementDonnees.php","bb05c3e1bfb48924d779d65bc779fe90"],["vendor/composer/autoload_static.php","d6b6e80b18d148123be9d57561abb2bb"],["vendor/monolog/monolog/CHANGELOG.mdown","b104ea62bf630577110a1dee9b71403a"],["vendor/monolog/monolog/README.mdown","4017a171f72cb8b928d12841b2e2e77d"],["vendor/monolog/monolog/composer.json","3dfb6fcd6660a5b9ba1963fda494db5e"],["vendor/monolog/monolog/doc/extending.md","1ec961150b164ab0781817c6e2b2d74e"],["vendor/monolog/monolog/doc/usage.md","e0494920b629c2a18f43262c220428c1"],["vendor/monolog/monolog/phpunit.xml.dist","95d6f5549715ccf35f15cbd77a62dcb5"],["vendor/monolog/monolog/src/Monolog/Formatter/FormatterInterface.php","fa35ab38b719a2a8486aacbc40cecb72"],["vendor/monolog/monolog/src/Monolog/Formatter/JsonFormatter.php","b519e1975941ff86f1ce6d17b9ddee22"],["vendor/monolog/monolog/src/Monolog/Formatter/LineFormatter.php","52694f0f9b98ed5eb470d8f27a03f8c6"],["vendor/monolog/monolog/src/Monolog/Formatter/WildfireFormatter.php","45cc125990f55b970abb2511297959c2"],["vendor/monolog/monolog/src/Monolog/Handler/AbstractHandler.php","4638442ca42d6ca9086faf51a04a857a"],["vendor/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php","502805eb17d08009f5e6e471d820ca5c"],["vendor/monolog/monolog/src/Monolog/Handler/BufferHandler.php","92e9c7c99c8a2e1f6e666597a812b090"],["vendor/monolog/monolog/src/Monolog/Handler/FingersCrossedHandler.php","8630f2b7082bf2f50652cf13e6ea1198"],["vendor/monolog/monolog/src/Monolog/Handler/FirePHPHandler.php","4ec68181e50f7c2f1fd8a19c2ab13398"],["vendor/monolog/monolog/src/Monolog/Handler/GroupHandler.php","57362284b3e105e7a9a63007355e48ed"],["vendor/monolog/monolog/src/Monolog/Handler/HandlerInterface.php","bd8c79c9e1bb9f1c90973fce8e861cb8"],["vendor/monolog/monolog/src/Monolog/Handler/MailHandler.php","9c136d15798a2eeb4a94216393722bf7"],["vendor/monolog/monolog/src/Monolog/Handler/NativeMailerHandler.php","2d7883f204a5e866489f53dc324f63ca"],["vendor/monolog/monolog/src/Monolog/Handler/NullHandler.php","efca29e34ac033d2a65017a5e6bf578d"],["vendor/monolog/monolog/src/Monolog/Handler/RotatingFileHandler.php","18da18a51f1c76bdb56c3076fb998159"],["vendor/monolog/monolog/src/Monolog/Handler/StreamHandler.php","9023f6c2f7eed8c378256998229c8ce4"],["vendor/monolog/monolog/src/Monolog/Handler/SwiftMailerHandler.php","11eddd6bfa765ebf2b1af3f0cf1c02a5"],["vendor/monolog/monolog/src/Monolog/Handler/SyslogHandler.php","cb964ef77885426819d3370f780f41c6"],["vendor/monolog/monolog/src/Monolog/Handler/TestHandler.php","016e78d3f9d5bed5edc5a61f3a185110"],["vendor/monolog/monolog/src/Monolog/Logger.php","6834e8038edac372348b07ce0691312c"],["vendor/monolog/monolog/src/Monolog/Processor/IntrospectionProcessor.php","697468beae1a62f57a5653a2bbc2d835"],["vendor/monolog/monolog/src/Monolog/Processor/MemoryPeakUsageProcessor.php","cca126cb7971e192f6017b0dc2a12953"],["vendor/monolog/monolog/src/Monolog/Processor/MemoryProcessor.php","11783b09dc69737526460a1e9cad2844"],["vendor/monolog/monolog/src/Monolog/Processor/MemoryUsageProcessor.php","c43896be092289a5ad51e0cffd8025c0"],["vendor/monolog/monolog/src/Monolog/Processor/WebProcessor.php","7001ad3b2e3b6be5850655171026a71b"],["vendor/monolog/monolog/tests/Monolog/Formatter/JsonFormatterTest.php","5b28d82c76538d19b932a1d77ec75bf1"],["vendor/monolog/monolog/tests/Monolog/Formatter/LineFormatterTest.php","136a21488a72941478df29b1870504f4"],["vendor/monolog/monolog/tests/Monolog/Formatter/WildfireFormatterTest.php","1503e9f02022583a9a9d493b1fc23204"],["vendor/monolog/monolog/tests/Monolog/Functional/Handler/FirePHPHandlerTest.php","cc441a1a400d087b293c5fec673e89fe"],["vendor/monolog/monolog/tests/Monolog/Handler/AbstractHandlerTest.php","36dcd026230ab89416856f962582cb41"],["vendor/monolog/monolog/tests/Monolog/Handler/AbstractProcessingHandlerTest.php","c1181d411df9da43b219fc8ae51de2e0"],["vendor/monolog/monolog/tests/Monolog/Handler/BufferHandlerTest.php","a61a93e5d98fd98ec3504e6ebafb24bf"],["vendor/monolog/monolog/tests/Monolog/Handler/FingersCrossedHandlerTest.php","47a7e26292aad69258b843d9cc3142a0"],["vendor/monolog/monolog/tests/Monolog/Handler/FirePHPHandlerTest.php","7c1cb788a716609e76c5dba49ab98b5c"],["vendor/monolog/monolog/tests/Monolog/Handler/GroupHandlerTest.php","602a051bc01940ec74224678b9957b3d"],["vendor/monolog/monolog/tests/Monolog/Handler/MailHandlerTest.php","3c4ea2e0f7084bfdf8e3f6dd5741a5b9"],["vendor/monolog/monolog/tests/Monolog/Handler/NullHandlerTest.php","fc3637e8f762c7c0223baefc89c4715c"],["vendor/monolog/monolog/tests/Monolog/Handler/RotatingFileHandlerTest.php","f6497abbf1c6e95db8794e0df901afb5"],["vendor/monolog/monolog/tests/Monolog/Handler/StreamHandlerTest.php","3ca9599e88033581c20058f7fcd66b31"],["vendor/monolog/monolog/tests/Monolog/Handler/SyslogHandlerTest.php","d3b219244794c7b5280bf7e70e9e34db"],["vendor/monolog/monolog/tests/Monolog/Handler/TestHandlerTest.php","de9eed4f920da14d9b6f9056b7133567"],["vendor/monolog/monolog/tests/Monolog/LoggerTest.php","864495c7ea3f15cbde6d3bbbb153b6ae"],["vendor/monolog/monolog/tests/Monolog/Processor/IntrospectionProcessorTest.php","6929d8ecd9e0b51b9bed176506f0c793"],["vendor/monolog/monolog/tests/Monolog/Processor/MemoryPeakUsageProcessorTest.php","cc660740e982698de45139dffa2f43b9"],["vendor/monolog/monolog/tests/Monolog/Processor/MemoryUsageProcessorTest.php","7f930e7ee7936fc0ada0f1dbc1eba62f"],["vendor/monolog/monolog/tests/Monolog/Processor/WebProcessorTest.php","6f0c7aca1c9a1ff869d9af07ced0a35a"],["vendor/monolog/monolog/tests/Monolog/TestCase.php","2a57bfea1f1b43fdb0670d62857ab721"],["vendor/monolog/monolog/tests/bootstrap.php","0d1fd8b0989e85646ab4cacedd1f30a7"],["vendor/verot/class.upload.php/LICENSE.txt","393a5ca445f6965873eca0259a17f833"],["vendor/verot/class.upload.php/README.md","4b74eb34ece1a96ddab3c9590234c7aa"],["vendor/verot/class.upload.php/composer.json","0274877e426740f76fd27d7ebf6882c3"],["vendor/verot/class.upload.php/src/class.upload.php","aca7c34cad6a63089b71e2132cdaa998"],["vendor/verot/class.upload.php/src/lang/class.upload.ca_CA.php","9393ecc49be7c99372859896d349ce30"],["vendor/verot/class.upload.php/src/lang/class.upload.cs_CS.php","d1058e482a78c182ff03aa06037a4838"],["vendor/verot/class.upload.php/src/lang/class.upload.da_DK.php","733bdc59b2273b507ac4b32b010a6b34"],["vendor/verot/class.upload.php/src/lang/class.upload.de_DE.php","99a1e33ca2a6c2bb9fac7eb2475ae8d6"],["vendor/verot/class.upload.php/src/lang/class.upload.el_GR.php","47a000c2b3f53f6e9d4499989f318a4f"],["vendor/verot/class.upload.php/src/lang/class.upload.es_ES.php","5f58b05d7857133cf4ee87194b6a1c76"],["vendor/verot/class.upload.php/src/lang/class.upload.et_EE.php","4a92302186b4ecfb4e7b51a2c1f75a6d"],["vendor/verot/class.upload.php/src/lang/class.upload.fa_IR.php","8ff6a505820d94834c06f6608576cd12"],["vendor/verot/class.upload.php/src/lang/class.upload.fi_FI.php","8c2327dd9161e320a81f7b6991b56fb3"],["vendor/verot/class.upload.php/src/lang/class.upload.fr_FR.php","c51dfa160d33ff65bf842097a807808b"],["vendor/verot/class.upload.php/src/lang/class.upload.he_IL.php","f174902e8bb9f88b5088152258fded6d"],["vendor/verot/class.upload.php/src/lang/class.upload.hr_HR.php","59705c9082eb6adc6f92c77f5dfad1ec"],["vendor/verot/class.upload.php/src/lang/class.upload.hu_HU.php","4d0fee72ad18811a7ceed5067b1d0e77"],["vendor/verot/class.upload.php/src/lang/class.upload.id_ID.php","4377aed9321135f247f8e5a7d97d4189"],["vendor/verot/class.upload.php/src/lang/class.upload.it_IT.php","e288aa02daded039326d77c6f3845e99"],["vendor/verot/class.upload.php/src/lang/class.upload.ja_JP.php","52570e3df8121e4c225dea993520ede5"],["vendor/verot/class.upload.php/src/lang/class.upload.lt_LT.php","cd4507564fd257ea2e1ac49527300615"],["vendor/verot/class.upload.php/src/lang/class.upload.mk_MK.php","b552c520c3cbe34db1c2f9c5e00d428b"],["vendor/verot/class.upload.php/src/lang/class.upload.nl_NL.php","84dfd39aafe9eeaf35417e17d91fa23b"],["vendor/verot/class.upload.php/src/lang/class.upload.no_NO.php","6154a10667ed9223593bd637d7f1a459"],["vendor/verot/class.upload.php/src/lang/class.upload.pl_PL.php","54d77b8ad6c30ba00f79c3986049392c"],["vendor/verot/class.upload.php/src/lang/class.upload.pt_BR.php","4e0cd32c560793ff69f2ef9de841ef71"],["vendor/verot/class.upload.php/src/lang/class.upload.ro_RO.php","b0ae4399953e6025d9bde665fcf634aa"],["vendor/verot/class.upload.php/src/lang/class.upload.ru_RU.php","29eacf4ced87503e49f59a9fad533030"],["vendor/verot/class.upload.php/src/lang/class.upload.ru_RU.windows-1251.php","b37b6abdefb4a1ce005b8a66687dce11"],["vendor/verot/class.upload.php/src/lang/class.upload.sk_SK.php","a2d5c6894538d43b70b1d444a0198941"],["vendor/verot/class.upload.php/src/lang/class.upload.sr_YU.php","11d5858f2342fe19cd6a2b4d06d1f9c1"],["vendor/verot/class.upload.php/src/lang/class.upload.sv_SE.php","d9ca2e00dcb1035074a5b868bdb81e9b"],["vendor/verot/class.upload.php/src/lang/class.upload.ta_TA.php","ec5926dbf4710359746dafcd44b10ce4"],["vendor/verot/class.upload.php/src/lang/class.upload.tr_TR.php","d416d4e1206b7482c99830bd73bd3c86"],["vendor/verot/class.upload.php/src/lang/class.upload.uk_UA.php","cc0549780bd5345f6a4f54904bc854f2"],["vendor/verot/class.upload.php/src/lang/class.upload.uk_UA.windows-1251.php","a04eb921aedfc635b15e0e5b85b76b03"],["vendor/verot/class.upload.php/src/lang/class.upload.vn_VN.php","d83010e512d44818dbd6cdbc14835875"],["vendor/verot/class.upload.php/src/lang/class.upload.xx_XX.php","45b2dd0f7c3dec4c2d1e1a843c46196e"],["vendor/verot/class.upload.php/src/lang/class.upload.zh_CN.gb-2312.php","1fcbd6b593021959da24d884c506c1d8"],["vendor/verot/class.upload.php/src/lang/class.upload.zh_CN.php","812f851eada63972ea51f1bdf0a20de0"],["vendor/verot/class.upload.php/src/lang/class.upload.zh_TW.php","ffc9b7336fdb769d97407e3da7c2d384"],["vendor/verot/class.upload.php/test/bg.gif","a28ef71a1c661330f0a0abd4fe6fa20d"],["vendor/verot/class.upload.php/test/foo.gdf","c23f6763e578afa9fc7c220a929a1216"],["vendor/verot/class.upload.php/test/foo.ttf","74692ba304e5cbd6849892291188cb28"],["vendor/verot/class.upload.php/test/index.html","d79b0d636bdcc07cb95888dca26279b9"],["vendor/verot/class.upload.php/test/test.bmp","7845e38372dde8e2d1e7b92be94e82bc"],["vendor/verot/class.upload.php/test/test.gif","780a3e6e720cb83feff25f181dd7f3cc"],["vendor/verot/class.upload.php/test/test.jpg","fff1504892be82d505d7f43f212d756c"],["vendor/verot/class.upload.php/test/test.png","aa24e34400066bbb3bffa596839446bf"],["vendor/verot/class.upload.php/test/upload.php","0adfca6854ba8674c0db298ce518222e"],["vendor/verot/class.upload.php/test/watermark.png","b68cb43acf0232f30a22d49d705911a3"],["vendor/verot/class.upload.php/test/watermark_large.png","9f2369168e3bc1edd6823fa8dd594018"]];
var cacheName = 'sw-precache-v3-sw-precache-' + (self.registration ? self.registration.scope : '');


var ignoreUrlParametersMatching = [/^utm_/];



var addDirectoryIndex = function (originalUrl, index) {
    var url = new URL(originalUrl);
    if (url.pathname.slice(-1) === '/') {
      url.pathname += index;
    }
    return url.toString();
  };

var cleanResponse = function (originalResponse) {
    // If this is not a redirected response, then we don't have to do anything.
    if (!originalResponse.redirected) {
      return Promise.resolve(originalResponse);
    }

    // Firefox 50 and below doesn't support the Response.body stream, so we may
    // need to read the entire body to memory as a Blob.
    var bodyPromise = 'body' in originalResponse ?
      Promise.resolve(originalResponse.body) :
      originalResponse.blob();

    return bodyPromise.then(function(body) {
      // new Response() is happy when passed either a stream or a Blob.
      return new Response(body, {
        headers: originalResponse.headers,
        status: originalResponse.status,
        statusText: originalResponse.statusText
      });
    });
  };

var createCacheKey = function (originalUrl, paramName, paramValue,
                           dontCacheBustUrlsMatching) {
    // Create a new URL object to avoid modifying originalUrl.
    var url = new URL(originalUrl);

    // If dontCacheBustUrlsMatching is not set, or if we don't have a match,
    // then add in the extra cache-busting URL parameter.
    if (!dontCacheBustUrlsMatching ||
        !(url.pathname.match(dontCacheBustUrlsMatching))) {
      url.search += (url.search ? '&' : '') +
        encodeURIComponent(paramName) + '=' + encodeURIComponent(paramValue);
    }

    return url.toString();
  };

var isPathWhitelisted = function (whitelist, absoluteUrlString) {
    // If the whitelist is empty, then consider all URLs to be whitelisted.
    if (whitelist.length === 0) {
      return true;
    }

    // Otherwise compare each path regex to the path of the URL passed in.
    var path = (new URL(absoluteUrlString)).pathname;
    return whitelist.some(function(whitelistedPathRegex) {
      return path.match(whitelistedPathRegex);
    });
  };

var stripIgnoredUrlParameters = function (originalUrl,
    ignoreUrlParametersMatching) {
    var url = new URL(originalUrl);
    // Remove the hash; see https://github.com/GoogleChrome/sw-precache/issues/290
    url.hash = '';

    url.search = url.search.slice(1) // Exclude initial '?'
      .split('&') // Split into an array of 'key=value' strings
      .map(function(kv) {
        return kv.split('='); // Split each 'key=value' string into a [key, value] array
      })
      .filter(function(kv) {
        return ignoreUrlParametersMatching.every(function(ignoredRegex) {
          return !ignoredRegex.test(kv[0]); // Return true iff the key doesn't match any of the regexes.
        });
      })
      .map(function(kv) {
        return kv.join('='); // Join each [key, value] array into a 'key=value' string
      })
      .join('&'); // Join the array of 'key=value' strings into a string with '&' in between each

    return url.toString();
  };


var hashParamName = '_sw-precache';
var urlsToCacheKeys = new Map(
  precacheConfig.map(function(item) {
    var relativeUrl = item[0];
    var hash = item[1];
    var absoluteUrl = new URL(relativeUrl, self.location);
    var cacheKey = createCacheKey(absoluteUrl, hashParamName, hash, false);
    return [absoluteUrl.toString(), cacheKey];
  })
);

function setOfCachedUrls(cache) {
  return cache.keys().then(function(requests) {
    return requests.map(function(request) {
      return request.url;
    });
  }).then(function(urls) {
    return new Set(urls);
  });
}

self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open(cacheName).then(function(cache) {
      return setOfCachedUrls(cache).then(function(cachedUrls) {
        return Promise.all(
          Array.from(urlsToCacheKeys.values()).map(function(cacheKey) {
            // If we don't have a key matching url in the cache already, add it.
            if (!cachedUrls.has(cacheKey)) {
              var request = new Request(cacheKey, {credentials: 'same-origin'});
              return fetch(request).then(function(response) {
                // Bail out of installation unless we get back a 200 OK for
                // every request.
                if (!response.ok) {
                  throw new Error('Request for ' + cacheKey + ' returned a ' +
                    'response with status ' + response.status);
                }

                return cleanResponse(response).then(function(responseToCache) {
                  return cache.put(cacheKey, responseToCache);
                });
              });
            }
          })
        );
      });
    }).then(function() {
      
      // Force the SW to transition from installing -> active state
      return self.skipWaiting();
      
    })
  );
});

self.addEventListener('activate', function(event) {
  var setOfExpectedUrls = new Set(urlsToCacheKeys.values());

  event.waitUntil(
    caches.open(cacheName).then(function(cache) {
      return cache.keys().then(function(existingRequests) {
        return Promise.all(
          existingRequests.map(function(existingRequest) {
            if (!setOfExpectedUrls.has(existingRequest.url)) {
              return cache.delete(existingRequest);
            }
          })
        );
      });
    }).then(function() {
      
      return self.clients.claim();
      
    })
  );
});


self.addEventListener('fetch', function(event) {
  if (event.request.method === 'GET') {
    // Should we call event.respondWith() inside this fetch event handler?
    // This needs to be determined synchronously, which will give other fetch
    // handlers a chance to handle the request if need be.
    var shouldRespond;

    // First, remove all the ignored parameters and hash fragment, and see if we
    // have that URL in our cache. If so, great! shouldRespond will be true.
    var url = stripIgnoredUrlParameters(event.request.url, ignoreUrlParametersMatching);
    shouldRespond = urlsToCacheKeys.has(url);

    // If shouldRespond is false, check again, this time with 'index.html'
    // (or whatever the directoryIndex option is set to) at the end.
    var directoryIndex = 'index.html';
    if (!shouldRespond && directoryIndex) {
      url = addDirectoryIndex(url, directoryIndex);
      shouldRespond = urlsToCacheKeys.has(url);
    }

    // If shouldRespond is still false, check to see if this is a navigation
    // request, and if so, whether the URL matches navigateFallbackWhitelist.
    var navigateFallback = '';
    if (!shouldRespond &&
        navigateFallback &&
        (event.request.mode === 'navigate') &&
        isPathWhitelisted([], event.request.url)) {
      url = new URL(navigateFallback, self.location).toString();
      shouldRespond = urlsToCacheKeys.has(url);
    }

    // If shouldRespond was set to true at any point, then call
    // event.respondWith(), using the appropriate cache key.
    if (shouldRespond) {
      event.respondWith(
        caches.open(cacheName).then(function(cache) {
          return cache.match(urlsToCacheKeys.get(url)).then(function(response) {
            if (response) {
              return response;
            }
            throw Error('The cached response that was expected is missing.');
          });
        }).catch(function(e) {
          // Fall back to just fetch()ing the request if some unexpected error
          // prevented the cached response from being valid.
          console.warn('Couldn\'t serve response for "%s" from cache: %O', event.request.url, e);
          return fetch(event.request);
        })
      );
    }
  }
});







