import Head from 'next/head'
import Image from 'next/image'
import { Inter } from '@next/font/google'
import React from 'react'
import MainLayout from '../components/layouts/MainLayout'

const inter = Inter({ subsets: ['latin'] })

export default function Home() {
    return (
        <MainLayout>
    
    
            <section id="hero" className="bg-white relative">
            <div className="mx-auto max-w-9xl w-full pt-16 pb-20 text-center lg:py-48 lg:text-left">


                <div className="px-4 lg:w-1/2 sm:px-8 xl:pr-12">
                    <span className="px-3 py-0.5 text-white text-xs font-semibold leading-5 uppercase tracking-wide bg-skin-accent rounded-full">Design with speed</span>
                    <h1 className="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl lg:text-5xl xl:text-6xl">
                        <span className="block xl:inline">Instant inspiration for</span>
                        <span className="js-hero-word-swap block text-pink-600 xl:inline">
                            ecommerce
                        </span> 
                    </h1>
                    <p className="mt-3 max-w-md mx-auto text-lg text-gray-500 sm:text-xl md:mt-5 md:max-w-3xl">
                        Find your next desing inspiration with our ever-growing catalog of 6,000+ unique screenshots 
                        and companies to gain insights, identify trends and get your work done faster 
                    
                    </p>
                    <div className="mt-10 sm:flex sm:justify-center lg:justify-start">
                    <div className="rounded-md shadow">
                        <a href="#" className="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-pink-600 hover:bg-pink-700 md:py-4 md:text-lg md:px-10">
                            View plans
                            <svg className="ml-2 stroke" fill="currentColor" strokeWidth="0" viewBox="0 0 448 512" fontSize="0.8em" aria-hidden="true" focusable="false" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path></svg>
                        </a>
                    </div>
                    <div className="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                        <a href="#" className="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-pink-600 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10">
                            View demo
                        </a>
                    </div>
                    </div>
                </div>
                <div className="relative bg-gray-100 overflow-hidden w-full h-64 sm:h-72 md:h-96 lg:h-full lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                <div className="h-auto overflow-hidden max-w-3xl" style={{"display": "inline-block"}}>
                    <div className="relative h-[1000px] w-[940px]" style={{"left": "-35px", "transform": "rotate(-10deg) translateZ(0)"}}>
                        <img className="infinite-top" />
                    </div>
                </div>
                </div>
            </div>
            </section>



            <section id="cloud-logos" className="bg-white">
            <div className="max-w-9xl mx-auto py-12 px-4 sm:px-6 lg:px-8">

                <div className="grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
                    <div className="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                        <img className="h-12" src="https://tailwindui.com/img/logos/tuple-logo-gray-400.svg" alt="Tuple" />
                    </div>
                    <div className="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                        <img className="h-12" src="https://tailwindui.com/img/logos/mirage-logo-gray-400.svg" alt="Mirage" />
                    </div>
                    <div className="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                        <img className="h-12" src="https://tailwindui.com/img/logos/statickit-logo-gray-400.svg" alt="StaticKit" />
                    </div>
                    <div className="col-span-1 flex justify-center md:col-span-3 lg:col-span-1">
                        <img className="h-12" src="https://tailwindui.com/img/logos/transistor-logo-gray-400.svg" alt="Transistor" />
                    </div>
                    <div className="col-span-2 flex justify-center md:col-span-3 lg:col-span-1">
                        <img className="h-12" src="https://tailwindui.com/img/logos/workcation-logo-gray-400.svg" alt="Workcation" />
                    </div>
                </div>
            
            </div>
            </section>




            <section className="bg-white">
            <div className=" relative max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:max-w-7xl relative mt-12 lg:mt-24 lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center py-28">
            
                <div className="relative">
                    <div>
                        <h3 className="text-2xl font-extrabold text-d-900 tracking-tight sm:text-5xl">
                            Easily view <span className="text-pink-600">cabadum</span>
                        </h3>
                        <p className="mt-3 text-lg text-d-500">
                            You don't need to wander everywhere to look for a specific UI, we have included advanced filtering to help you navigate though our   huge library of resourcs 
                        </p>
                    </div>
                    <dl className="mt-10 space-y-10">
                        <div className="relative bg-gray-100 shadow p-6 rounded-lg cursor-pointer">
                            <dt>
                                <p className="text-lg leading-6 font-medium text-d-900">
                                    Filtering by sections
                                </p>
                            </dt>
                            <dd className="mt-2 text-base text-d-500">
                                {/* {{-- Search top players in the industry and see how they have done it, view their color palette, pages etc --}} */}
                                Wether you're interested in CTA or HERO
                            </dd>
                        </div>
                        <div className="relative opacity-50 z-10 p-3 rounded-lg cursor-pointer">
                            <dt>
                                <p className="text-lg leading-6 font-medium text-gray-600 hover:text-gray-900">Company Details</p>
                            </dt>
                        
                        </div>
                        <div className="relative opacity-50 z-10 p-3 rounded-lg cursor-pointer">
                            <dt>
                                <p className="text-lg leading-6 font-medium text-gray-600 hover:text-gray-900">Search by type</p>
                                {/* {{-- ecommerce, saas pages/marketing, application --}} */}
                            </dt>
                        </div>
                    </dl>
                </div>
                <div className="mt-12 mt-32 -mx-4 relative" aria-hidden="true">
                    {/* {{-- <img className="relative mx-auto" width="490" src="https://thedesignership.com/wp-content/uploads/2022/01/Shipfaster-UI-Out-of-the-box.png" alt=""> --}}
                    {{-- <video className="w-full" autoplay src="https://www.framer.com/images/fp/features-preview.mp4"></video> --}} */}
                    <video className="rounded-2xl w-full" loop muted>
                        <source src="https://www.framer.com/images/fp/features-preview.mp4" type="video/mp4"/>
                        <source src="https://www.framer.com/images/fp/features-preview.mp4" type="video/ogg"/>
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            </section>



            <section>
            <div className="bg-gradient-to-r from-pink-500 to-purple-500">
                <div className="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
                    <h2 className="text-3xl font-extrabold text-white sm:text-6xl">
                        <span className="block">Build faster with UI blocks</span>
                        {/* {{-- <span className="block">Start using Workflow today.</span> --}} */}
                    </h2>
                    <p className="mt-4 text-lg leading-6 text-pink-200">
                        Beautiful and responsive React components to build your application or marketing pages quicker.
                    </p>
                    <a href="#"
                        className="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-pink-600 bg-white hover:bg-pink-50 sm:w-auto">
                        Sign up for free
                    </a>
                </div>
                <img className="max-w-6xl mx-auto" src="https://chakra-ui.com/_next/image?url=%2Fchakra-ui-ad.png&w=1920&q=75" />
            </div>
            </section>











            <div className="bg-d-100">
                <div className="pt-12 sm:pt-16 lg:pt-20">
                  <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="text-center">
                      <h2 className="text-3xl font-extrabold text-d-900 sm:text-4xl lg:text-5xl">
                        Simple no-tricks pricing
                      </h2>
                      <p className="mt-4 text-xl text-d-600">
                        If you're not satisfied, contact us within the first 14 days and we'll send you a full refund.
                      </p>
                    </div>
                  </div>
                </div>
                
                <div className="mt-8 bg-white pb-16 sm:mt-12 sm:pb-20 lg:pb-28">
                  <div className="relative">
                    <div className="absolute inset-0 h-1/2 bg-d-100"></div>
                    <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                      <div className="max-w-lg mx-auto rounded-lg shadow-lg overflow-hidden lg:max-w-none lg:flex">
                        
                        <div className="py-8 px-6 text-center bg-d-50 lg:flex-shrink-0 lg:flex lg:flex-col lg:justify-center lg:p-12">
                          <p className="text-lg leading-6 font-medium text-d-900">
                            Monthly
                          </p>
                          <div className="mt-4 flex items-center justify-center text-5xl font-extrabold text-d-900">
                            <span>
                              $20
                            </span>
                            <span className="ml-3 text-xl font-medium text-d-500">
                              USD
                            </span>
                          </div>
                          <p className="mt-4 text-sm">
                            <a href="#" className="font-medium text-d-500 underline">
                              Learn about our membership policy
                            </a>
                          </p>
                          <div className="mt-6">
                            <div className="rounded-md shadow">
                              <a href="#" className="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-pink-600 hover:bg-pink-700">
                                Get Access
                              </a>
                            </div>
                          </div>
                           
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <section className="bg-white">
            <div className="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-20 lg:px-8">
            <div className="lg:grid lg:grid-cols-3 lg:gap-8">
                <div>
                    <h2 className="text-3xl font-extrabold text-gray-900">Frequently asked questions</h2>
                    <p className="mt-4 text-lg text-gray-500">Can’t find the answer you’re looking for? Reach out to our <a href="#" className="font-medium text-pink-600 hover:text-pink-500">customer support</a> team.</p>
                </div>
                <div className="mt-12 lg:mt-0 lg:col-span-2">
                <dl className="space-y-12">
                    <div>
                        <dt className="text-lg leading-6 font-medium text-gray-900">
                        It's expensive! Can I get a discount?
                        </dt>
                        <dd className="mt-2 text-base text-gray-500">
                        By paying $20 a month, you're saving yourself dozens of hours of research time. Say, for example, you earn $20 an hour, and spend 10 hours a month on research. By having us do the research for you, will essentially earn an extra $180 a month and gain back 9hours of your life back from monotone googling :)    
                        </dd>
                    </div>
                    <div>
                        <dt className="text-lg leading-6 font-medium text-gray-900">
                        What's the best thing about Switzerland?
                        </dt>
                        <dd className="mt-2 text-base text-gray-500">
                        I don't know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
                        </dd>
                    </div>
                    <div>
                        <dt className="text-lg leading-6 font-medium text-gray-900">
                        What do you call someone with no body and no nose?
                        </dt>
                        <dd className="mt-2 text-base text-gray-500">
                        Nobody knows. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
                        </dd>
                    </div>
                    <div>
                        <dt className="text-lg leading-6 font-medium text-gray-900">
                        Why do you never see elephants hiding in trees?
                        </dt>
                        <dd className="mt-2 text-base text-gray-500">
                        Because they're so good at it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
                        </dd>
                    </div>
                </dl>
                </div>
            </div>
            </div>
            </section>
            <section id="join-discord" className="bg-[#5865f2]">
            <div className="flex justify-between max-w-7xl mx-auto py-8">
                <div className="flex">
                    <svg viewBox="0 0 48 48" focusable="false" className="w-12 mr-6"><g id="surface1615260"><path d="M 39.246094 10.175781 C 36.445312 8.890625 33.4375 7.941406 30.292969 7.398438 C 30.234375 7.390625 30.179688 7.414062 30.148438 7.46875 C 29.761719 8.15625 29.332031 9.050781 29.03125 9.757812 C 25.652344 9.253906 22.285156 9.253906 18.972656 9.757812 C 18.675781 9.035156 18.230469 8.15625 17.839844 7.46875 C 17.8125 7.414062 17.753906 7.390625 17.695312 7.398438 C 14.554688 7.941406 11.546875 8.886719 8.742188 10.175781 C 8.71875 10.1875 8.695312 10.203125 8.683594 10.226562 C 2.976562 18.75 1.414062 27.0625 2.183594 35.273438 C 2.183594 35.3125 2.207031 35.351562 2.238281 35.375 C 6.003906 38.140625 9.648438 39.816406 13.226562 40.929688 C 13.28125 40.945312 13.34375 40.925781 13.378906 40.878906 C 14.226562 39.722656 14.980469 38.503906 15.628906 37.222656 C 15.664062 37.148438 15.628906 37.058594 15.550781 37.027344 C 14.355469 36.574219 13.214844 36.019531 12.121094 35.390625 C 12.03125 35.339844 12.027344 35.21875 12.105469 35.15625 C 12.335938 34.984375 12.566406 34.804688 12.789062 34.625 C 12.828125 34.589844 12.882812 34.585938 12.929688 34.605469 C 20.132812 37.894531 27.925781 37.894531 35.042969 34.605469 C 35.089844 34.582031 35.144531 34.589844 35.1875 34.621094 C 35.40625 34.804688 35.636719 34.984375 35.871094 35.15625 C 35.949219 35.21875 35.945312 35.339844 35.859375 35.390625 C 34.761719 36.03125 33.621094 36.574219 32.425781 37.027344 C 32.347656 37.054688 32.3125 37.144531 32.347656 37.222656 C 33.011719 38.503906 33.765625 39.71875 34.59375 40.875 C 34.628906 40.925781 34.691406 40.945312 34.75 40.929688 C 38.34375 39.816406 41.988281 38.136719 45.753906 35.375 C 45.785156 35.351562 45.808594 35.3125 45.808594 35.273438 C 46.726562 25.78125 44.273438 17.539062 39.304688 10.230469 C 39.292969 10.203125 39.273438 10.1875 39.246094 10.175781 Z M 16.703125 30.273438 C 14.535156 30.273438 12.75 28.28125 12.75 25.839844 C 12.75 23.394531 14.5 21.402344 16.703125 21.402344 C 18.921875 21.402344 20.691406 23.410156 20.65625 25.839844 C 20.65625 28.28125 18.90625 30.273438 16.703125 30.273438 Z M 31.324219 30.273438 C 29.15625 30.273438 27.371094 28.28125 27.371094 25.839844 C 27.371094 23.394531 29.121094 21.402344 31.324219 21.402344 C 33.542969 21.402344 35.3125 23.410156 35.277344 25.839844 C 35.277344 28.28125 33.542969 30.273438 31.324219 30.273438 Z M 31.324219 30.273438 " style={{"stroke": "none", "fillRule": "nonzero", "fill": "rgb(255, 255, 255)", "fillOpacity": "1"}}></path></g></svg>
                    <div className="text-white">
                        <h3 className="text-md font-bold text-d-900 sm:text-lg">Connect with the community</h3>
                        <p className="text-base text-d-500 opacity-70">Feel free to ask questions, report issues, and meet people</p>
                    </div>
                </div>
                <div>
                <a href="#" className="w-full block items-center justify-center px-3 py-3 border border-transparent text-base font-medium rounded-md text-black bg-white hover:bg-white md:py-4 md:text-md md:px-10">
                    Join the #Nike Discord!
                </a>
                </div>
               
            </div>
            </section>
            
            
  
        </MainLayout>
    )
}
