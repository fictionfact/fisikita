@extends('pages/front-end/template/template2')
@section('title', 'LOKALAJA - Terms and conditions')
 @section('content')
 <!--========== PROMO BLOCK ==========-->
        <div class="js__parallax-window" style="background: url(img/1920x1080/06.jpg) 50% 0 no-repeat fixed;">
            <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
                <div class="g-margin-b-60--xs">
                    <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-70--md g-color--white g-letter-spacing--1 g-margin-b-30--xs">FAQ</h1>
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2">Your Questions. Answered.</p>
                </div>
                <a href="#js__scroll-to-section">
                    <span class="s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-double-down"></span>
                </a>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->
        <!-- FA Questions Text -->
        <div id="js__scroll-to-section" class="g-container--md g-padding-y-80--xs g-padding-y-125--sm">
            <h2 class="g-font-size-32--xs g-font-size-36--md g-text-center--xs g-margin-b-80--xs">What are the <br> Frequently Asked Questions?</h2>
            <div class="row g-margin-b-50--xs">
                <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--sm">
                    <p>This is where we sit down, grab a cup of coffee and dial in the details. Understanding the task at hand and ironing out the wrinkles is key. Now that we've aligned the details, it's time to get things mapped out and organized.</p>
                    
                    <div class="s-faq__pseudo g-padding-y-40--xs">
                        <p class="g-color--primary g-font-family--playfair"><i>How Can I Improve myself?</i></p>
                        <div class="g-margin-l-70--xs">
                            <p class="g-color--primary g-font-family--playfair"><i>How Can I Improve the World?</i></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <p>The time has come to bring those ideas and plans to life. This is where we really begin to visualize your napkin sketches and make them into beautiful pixels. Whether through commerce or just an experience to tell your brand's story, the time has come to start using development languages that fit your projects needs.</p>
                    <p>Now that your brand is all dressed up and ready to party, it's time to release it to the world. By the way, let's celebrate already. We get it, you're busy and it's important that someone keeps up with marketing and driving people to your brand. We've got you covered.</p>
                </div>
            </div>
            <div class="g-text-center--xs">
                <p class="g-margin-b-5--xs">We aim high at being focused on building relationships with our clients and community. Using our creative gifts drives this foundation.</p>
                <p>Working together on the daily requires each individual to let the greater good<br>of the team’s work surface above their own ego.</p>
            </div>
        </div>
        <!-- End FA Questions Text -->

        <!-- Accordion -->
        <div class="s-faq g-bg-color--primary">
            <div class="container g-padding-y-125--xs">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="cbp cbp-l-grid-faq js__grid-faq">
                            <div class="cbp-item buying">
                                <div class="cbp-caption">
                                    <div class="s-faq-grid__divider cbp-caption-defaultWrap">
                                        <svg width="19" height="19" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#fff" d="M1299 813l-422 422q-19 19-45 19t-45-19l-294-294q-19-19-19-45t19-45l102-102q19-19 45-19t45 19l147 147 275-275q19-19 45-19t45 19l102 102q19 19 19 45t-19 45zm141 83q0-148-73-273t-198-198-273-73-273 73-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273zm224 0q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"/>
                                        </svg>
                                        <h2 class="s-faq-grid__title">what is lokalaja?</h2>
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="g-color--white-opacity">
                                           Lokalaja is a platform to connect everyone to enthusiast local people. In our platform, all you can find are amazing, one of a kind experiences that are created & conducted by the local people themselves (we call them our GUIDE).
                                           <Br>
											Our experiences can be enjoyed by either locals to a city or travelers:<Br>
											For local people, you can find experiences e.g. classes/workshops from the local experts (like calligrapher, chef, etc). You can now see a part of your city that has never been seen/known before, immerse in the experts' world, and make new friends! <br>
											For travelers, we believe that if you come to a city, you truly want to experience the city, not just to come, see, and visit. For that reason, we believe no other person can show you a city better than the locals themselves.<Br>

											We have two type of experiences:<Br>
											'By Appointment' experience. In this experience, you choose the date and time of experience (more flexible)<br>
											'Fix Date' experience. In this experience, the date and time has been set by the guide.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-item community">
                                <div class="cbp-caption">
                                    <div class="s-faq-grid__divider cbp-caption-defaultWrap">
                                        <svg width="19" height="19" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#fff" d="M1062 150q-317 121-556 362.5t-358 560.5q-20-89-20-176 0-208 102.5-384.5t278.5-279 384-102.5q82 0 169 19zm269 119q93 65 164 155-389 113-674.5 400.5t-396.5 676.5q-93-72-155-162 112-386 395-671t667-399zm-733 1334q115-356 379.5-622t619.5-384q40 92 54 195-292 120-516 345t-343 518q-103-14-194-52zm1066 58q-193-50-367-115-135 84-290 107 109-205 274-370.5t369-275.5q-21 152-101 284 65 175 115 370z"/>
                                        </svg>
                                        <h3 class="s-faq-grid__title">How dose it work?</h3>
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="g-color--white-opacity">
                                            Our platform enables the local people to create and guide the experience themselves in whatever area they are interested in. Then our platform enable everyone (whether you are in a vacation mode, quick business trip, other locals who want to try something new, etc) to choose, book, and make payment to experiences that suit you the most.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-item buying">
                                <div class="cbp-caption">
                                    <div class="s-faq-grid__divider cbp-caption-defaultWrap">
                                        <svg width="19" height="19" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#fff" d="M1088 1256v240q0 16-12 28t-28 12h-240q-16 0-28-12t-12-28v-240q0-16 12-28t28-12h240q16 0 28 12t12 28zm316-600q0 54-15.5 101t-35 76.5-55 59.5-57.5 43.5-61 35.5q-41 23-68.5 65t-27.5 67q0 17-12 32.5t-28 15.5h-240q-15 0-25.5-18.5t-10.5-37.5v-45q0-83 65-156.5t143-108.5q59-27 84-56t25-76q0-42-46.5-74t-107.5-32q-65 0-108 29-35 25-107 115-13 16-31 16-12 0-25-8l-164-125q-13-10-15.5-25t5.5-28q160-266 464-266 80 0 161 31t146 83 106 127.5 41 158.5z"/>
                                        </svg>
                                        <h4 class="s-faq-grid__title">How Do I book?</h4>
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="g-color--white-opacity">
                                            Choose the experience of your interest -> read the details of the experience/connect with the guide -> click 'book now' ! As simple as that.

The locals will provide informations related to the experiences they are offering, for example: languages they are speaking, itinerary of the trips/class/workshops, what's included, requirements, etc. Please do read carefully.

We will keep working hard to make the booking process as easy as possible. Please contact us if you have some inputs.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-item author">
                                <div class="cbp-caption">
                                    <div class="s-faq-grid__divider cbp-caption-defaultWrap">
                                        <svg width="19" height="19" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#fff" d="M1696 128q66 0 113 47t47 113v1216q0 66-47 113t-113 47h-1600q-66 0-113-47t-47-113v-1216q0-66 47-113t113-47h1600zm-1600 128q-13 0-22.5 9.5t-9.5 22.5v224h1664v-224q0-13-9.5-22.5t-22.5-9.5h-1600zm1600 1280q13 0 22.5-9.5t9.5-22.5v-608h-1664v608q0 13 9.5 22.5t22.5 9.5h1600zm-1504-128v-128h256v128h-256zm384 0v-128h384v128h-384z"/>
                                        </svg>
                                        <h4 class="s-faq-grid__title">how do i pay?</h4>
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="g-color--white-opacity">
                                           Currently we only accept bank transfers to our account. In the future, we will provide more options in the payment methods for a more convenient experience.

You only pay the price of the experience. No hidden cost.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-item copyright">
                                <div class="cbp-caption">
                                    <div class="s-faq-grid__divider cbp-caption-defaultWrap">
                                        <svg width="19" height="19" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#fff" d="M1278 1074v109q0 50-36.5 89t-94 60.5-118 32.5-117.5 11q-205 0-342.5-139t-137.5-346q0-203 136-339t339-136q34 0 75.5 4.5t93 18 92.5 34 69 56.5 28 81v109q0 16-16 16h-118q-16 0-16-16v-70q0-43-65.5-67.5t-137.5-24.5q-140 0-228.5 91.5t-88.5 237.5q0 151 91.5 249.5t233.5 98.5q68 0 138-24t70-66v-70q0-7 4.5-11.5t10.5-4.5h119q6 0 11 4.5t5 11.5zm-382-818q-130 0-248.5 51t-204 136.5-136.5 204-51 248.5 51 248.5 136.5 204 204 136.5 248.5 51 248.5-51 204-136.5 136.5-204 51-248.5-51-248.5-136.5-204-204-136.5-248.5-51zm768 640q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"/>
                                        </svg>
                                        <h4 class="s-faq-grid__title">how's the trust and safety?</h4>
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="g-color--white-opacity">
                                           We do take the trust and safety issue of our customers very seriously. The locals must pass all the verifications needed in order to become a guide in Lokalaja: we ask for their id/driving license/passport, valid phone number and email address, and we even ask them to send us their selfies!
<br>
To make our customers feel more comfortable and certain, we also provide the contacts of your future guide. You are able to contact them freely before making any booking. In addition, there will be reviews from past customers as well, please take into account the reviews before making a booking.
<br>
However, if the guides conduct something inappropriate, please contact us.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-item author">
                                <div class="cbp-caption">
                                    <div class="s-faq-grid__divider cbp-caption-defaultWrap">
                                        <svg width="19" height="19" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#fff" d="M1664 896q0 156-61 298t-164 245-245 164-298 61q-172 0-327-72.5t-264-204.5q-7-10-6.5-22.5t8.5-20.5l137-138q10-9 25-9 16 2 23 12 73 95 179 147t225 52q104 0 198.5-40.5t163.5-109.5 109.5-163.5 40.5-198.5-40.5-198.5-109.5-163.5-163.5-109.5-198.5-40.5q-98 0-188 35.5t-160 101.5l137 138q31 30 14 69-17 40-59 40h-448q-26 0-45-19t-19-45v-448q0-42 40-59 39-17 69 14l130 129q107-101 244.5-156.5t284.5-55.5q156 0 298 61t245 164 164 245 61 298zm-640-288v448q0 14-9 23t-23 9h-320q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h224v-352q0-14 9-23t23-9h64q14 0 23 9t9 23z"/>
                                        </svg>
                                        <h4 class="s-faq-grid__title">​what happen if the local cancel the trip? or i have to cancel my trip?</h4>
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="g-color--white-opacity">
                                           Worry less. This is how our payment system works: we will hold your payment and transfer it to the guides only after the experience has been completed. If for some acceptable reasons that cause the trips can't be conducted or the customers have to cancel it, we will transfer the full money back to customers.
                                           <Br>
For not-refundable experience, the experience will surely take place. So, please really check your availability!
											<Br>
However, if you have to cancel the experience, we do encourage you to inform us far before the date of experience. This then allows us to return your money (for refundable experiences) and the guides will be able to make another appointment or save a seat for another customers.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-item account">
                                <div class="cbp-caption">
                                    <div class="s-faq-grid__divider cbp-caption-defaultWrap">
                                        <svg width="19" height="19" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#fff" d="M1600 1405q0 120-73 189.5t-194 69.5h-874q-121 0-194-69.5t-73-189.5q0-53 3.5-103.5t14-109 26.5-108.5 43-97.5 62-81 85.5-53.5 111.5-20q9 0 42 21.5t74.5 48 108 48 133.5 21.5 133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5t-271.5 112.5-271.5-112.5-112.5-271.5 112.5-271.5 271.5-112.5 271.5 112.5 112.5 271.5z"/>
                                        </svg>
                                        <h4 class="s-faq-grid__title">who could be a guide?</h4>
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="g-color--white-opacity">
                                            Everyone, wherever you are, whatever area you are interested in. Moreover, the guides can create, price, and set the schedule in their own experience.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="cbp cbp-l-grid-faq js__grid-faq">
                            <div class="cbp-item account">
                                <div class="cbp-caption">
                                    <div class="s-faq-grid__divider cbp-caption-defaultWrap">
                                        <svg width="19" height="19" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#fff" d="M1376 768q40 0 68 28t28 68v576q0 40-28 68t-68 28h-960q-40 0-68-28t-28-68v-576q0-40 28-68t68-28h32v-320q0-185 131.5-316.5t316.5-131.5 316.5 131.5 131.5 316.5q0 26-19 45t-45 19h-64q-26 0-45-19t-19-45q0-106-75-181t-181-75-181 75-75 181v320h736z"/>
                                        </svg>
                                        <h4 class="s-faq-grid__title">what kind of experience can i create?</h4>
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="g-color--white-opacity">
                                           Basically everything (as long as it is legal of course). For example:

If you are a food enthusiast in Medan, you can create a whole day culinary experience. If you are a photographer in Jogjakarta, you can create a photography experience in beautiful hidden places. If you are a night owl in Jakarta, you can create an exploring nightlife experience. Or if you are mother that knows how to make a tasty rendang in Padang, you can create an experience to teach the travelers/other locals and have a lunch together afterwards.

It is all about connecting people and provide unforgettable experience with your own perspective and knowledge.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-item author">
                                <div class="cbp-caption">
                                    <div class="s-faq-grid__divider cbp-caption-defaultWrap">
                                        <svg width="19" height="19" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#fff" d="M1152 640q0-106-75-181t-181-75-181 75-75 181 75 181 181 75 181-75 75-181zm256 0q0 109-33 179l-364 774q-16 33-47.5 52t-67.5 19-67.5-19-46.5-52l-365-774q-33-70-33-179 0-212 150-362t362-150 362 150 150 362z"/>
                                        </svg>
                                        <h4 class="s-faq-grid__title">how do i become guide</h4>
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="g-color--white-opacity">
                                           Please contact us through email lokalajadeh@gmail.com,
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-item copyright">
                                <div class="cbp-caption">
                                    <div class="s-faq-grid__divider cbp-caption-defaultWrap">
                                        <svg width="19" height="19" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#fff" d="M320 1168v96q0 16-16 16h-96q-16 0-16-16v-96q0-16 16-16h96q16 0 16 16zm128-256v96q0 16-16 16h-224q-16 0-16-16v-96q0-16 16-16h224q16 0 16 16zm-128-256v96q0 16-16 16h-96q-16 0-16-16v-96q0-16 16-16h96q16 0 16 16zm1024 512v96q0 16-16 16h-864q-16 0-16-16v-96q0-16 16-16h864q16 0 16 16zm-640-256v96q0 16-16 16h-96q-16 0-16-16v-96q0-16 16-16h96q16 0 16 16zm-128-256v96q0 16-16 16h-96q-16 0-16-16v-96q0-16 16-16h96q16 0 16 16zm384 256v96q0 16-16 16h-96q-16 0-16-16v-96q0-16 16-16h96q16 0 16 16zm-128-256v96q0 16-16 16h-96q-16 0-16-16v-96q0-16 16-16h96q16 0 16 16zm384 256v96q0 16-16 16h-96q-16 0-16-16v-96q0-16 16-16h96q16 0 16 16zm384 256v96q0 16-16 16h-96q-16 0-16-16v-96q0-16 16-16h96q16 0 16 16zm-512-512v96q0 16-16 16h-96q-16 0-16-16v-96q0-16 16-16h96q16 0 16 16zm256 0v96q0 16-16 16h-96q-16 0-16-16v-96q0-16 16-16h96q16 0 16 16zm256 0v352q0 16-16 16h-224q-16 0-16-16v-96q0-16 16-16h112v-240q0-16 16-16h96q16 0 16 16zm128 752v-896h-1664v896h1664zm128-896v896q0 53-37.5 90.5t-90.5 37.5h-1664q-53 0-90.5-37.5t-37.5-90.5v-896q0-53 37.5-90.5t90.5-37.5h1664q53 0 90.5 37.5t37.5 90.5z"/>
                                        </svg>
                                        <h4 class="s-faq-grid__title">After becoming a guide, how to modify or terminate my experience</h4>
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="g-color--white-opacity">
                                           Please contact us through email lokalajadeh@gmail.com,
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-item copyright">
                                <div class="cbp-caption">
                                    <div class="s-faq-grid__divider cbp-caption-defaultWrap">
                                        <svg width="19" height="19" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#fff" d="M1596 380q28 28 48 76t20 88v1152q0 40-28 68t-68 28h-1344q-40 0-68-28t-28-68v-1600q0-40 28-68t68-28h896q40 0 88 20t76 48zm-444-244v376h376q-10-29-22-41l-313-313q-12-12-41-22zm384 1528v-1024h-416q-40 0-68-28t-28-68v-416h-768v1536h1280zm-979-234v106h281v-106h-75l103-161q5-7 10-16.5t7.5-13.5 3.5-4h2q1 4 5 10 2 4 4.5 7.5t6 8 6.5 8.5l107 161h-76v106h291v-106h-68l-192-273 195-282h67v-107h-279v107h74l-103 159q-4 7-10 16.5t-9 13.5l-2 3h-2q-1-4-5-10-6-11-17-23l-106-159h76v-107h-290v107h68l189 272-194 283h-68z"/>
                                        </svg>
                                        <h4 class="s-faq-grid__title">When will i receive my payment?</h4>
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="g-color--white-opacity">
                                           Max 2 days after the experience has been conducted
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-item copyright">
                                <div class="cbp-caption">
                                    <div class="s-faq-grid__divider cbp-caption-defaultWrap">
                                        <svg width="19" height="19" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#fff" d="M896 128q209 0 385.5 103t279.5 279.5 103 385.5-103 385.5-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103zm128 1247v-190q0-14-9-23.5t-22-9.5h-192q-13 0-23 10t-10 23v190q0 13 10 23t23 10h192q13 0 22-9.5t9-23.5zm-2-344l18-621q0-12-10-18-10-8-24-8h-220q-14 0-24 8-10 6-10 18l17 621q0 10 10 17.5t24 7.5h185q14 0 23.5-7.5t10.5-17.5z"/>
                                        </svg>
                                        <h4 class="s-faq-grid__title">can i cancel my experience</h4>
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="g-color--white-opacity">
                                            We authorise the experience to be cancelled by the locals if there are some requirements made by the locals that are not met by the customers or any major events happen. 
                                            <Br>
Any (sudden) cancellation other than those indicated or on the day of experience will create a major discomfort and the locals must inform Lokalaja and the customers as quickly as possible. However, if we see that this occurs very often, it will have an effect on the locals, for example: we may remove the locals from the lists.
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Accordion -->
@endsection