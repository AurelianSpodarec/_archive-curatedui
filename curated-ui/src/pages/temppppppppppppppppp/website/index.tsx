import { useRouter } from "next/router";
import CardPage from "../../../components/molecules/CardPage";
import CompanyLayout from "../../inspiration/companies/_components/CompanyLayout";


function WebsiteIndex() {
 
    return (
        <CompanyLayout>
        <div className="flex flex-row relative">

            <aside className="flex-none w-[320px]">
            <div className="flex">
                
                <nav id="nav" className="lg:text-sm lg:leading-6 relative">
                <ul>
                    <li>
                    <a href="/docs/installation" className="group flex items-center lg:text-sm lg:leading-6 mb-4 font-semibold text-sky-500 dark:text-sky-400">
                        <div className="mr-4 rounded-md ring-1 ring-slate-900/5 shadow-sm group-hover:shadow group-hover:ring-slate-900/10 dark:ring-0 dark:shadow-none dark:group-hover:shadow-none dark:group-hover:highlight-white/10 group-hover:shadow-sky-200 dark:group-hover:bg-sky-500 dark:bg-sky-500 dark:highlight-white/10">
                        <svg className="h-6 w-6" viewBox="0 0 24 24" fill="none">
                            <path fill-rule="evenodd" clipRule="evenodd" d="M8.5 7c1.093 0 2.117.27 3 .743V17a6.345 6.345 0 0 0-3-.743c-1.093 0-2.617.27-3.5.743V7.743C5.883 7.27 7.407 7 8.5 7Z" className="fill-sky-200 group-hover:fill-sky-500 dark:fill-sky-300 dark:group-hover:fill-sky-300"></path>
                            <path fill-rule="evenodd" clipRule="evenodd" d="M15.5 7c1.093 0 2.617.27 3.5.743V17c-.883-.473-2.407-.743-3.5-.743s-2.117.27-3 .743V7.743a6.344 6.344 0 0 1 3-.743Z" className="fill-sky-400 group-hover:fill-sky-500 dark:fill-sky-200 dark:group-hover:fill-sky-200"></path>
                        </svg>
                        </div>
                        Pages
                    </a>
                    </li>

                    <li><a href="https://tailwindui.com/components?ref=sidebar" className="group flex items-center lg:text-sm lg:leading-6 mb-4 font-medium text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300">
                            <div className="mr-4 rounded-md ring-1 ring-slate-900/5 shadow-sm group-hover:shadow group-hover:ring-slate-900/10 dark:ring-0 dark:shadow-none dark:group-hover:shadow-none dark:group-hover:highlight-white/10 group-hover:shadow-indigo-200 dark:group-hover:bg-indigo-500 dark:bg-slate-800 dark:highlight-white/5"><svg className="h-6 w-6" viewBox="0 0 24 24" fill="none">
                                <path d="m6 9 6-3 6 3v6l-6 3-6-3V9Z" className="fill-indigo-100 group-hover:fill-indigo-200 dark:fill-slate-400"></path>
                                <path d="m6 9 6 3v7l-6-3V9Z" className="fill-indigo-300 group-hover:fill-indigo-400 dark:group-hover:fill-indigo-300 dark:fill-slate-500"></path>
                                <path d="m18 9-6 3v7l6-3V9Z" className="fill-indigo-400 group-hover:fill-indigo-500 dark:group-hover:fill-indigo-400 dark:fill-slate-600"></path>
                            </svg></div>Blocks
                        </a></li>
                    <li><a href="https://tailwindui.com/templates?ref=sidebar" className="group flex items-center lg:text-sm lg:leading-6 mb-4 font-medium text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300">
                            <div className="mr-4 rounded-md ring-1 ring-slate-900/5 shadow-sm group-hover:shadow group-hover:ring-slate-900/10 dark:ring-0 dark:shadow-none dark:group-hover:shadow-none dark:group-hover:highlight-white/10 group-hover:shadow-fuchsia-200 dark:group-hover:bg-fuchsia-600 dark:bg-slate-800 dark:highlight-white/5"><svg className="h-6 w-6" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clipRule="evenodd" d="M8 6C6.89543 6 6 6.89543 6 8V16C6 17.1046 6.89543 18 8 18H10.5C11.0523 18 11.5 17.5523 11.5 17V12C11.5 10.6193 12.6193 9.5 14 9.5H18V8C18 6.89543 17.1046 6 16 6H8ZM7.25 8C7.25 7.58579 7.58579 7.25 8 7.25H8.01C8.42421 7.25 8.76 7.58579 8.76 8C8.76 8.41421 8.42421 8.75 8.01 8.75H8C7.58579 8.75 7.25 8.41421 7.25 8ZM10 7.25C9.58579 7.25 9.25 7.58579 9.25 8C9.25 8.41421 9.58579 8.75 10 8.75H10.01C10.4242 8.75 10.76 8.41421 10.76 8C10.76 7.58579 10.4242 7.25 10.01 7.25H10Z" fill="#E879F9" className="fill-fuchsia-400 group-hover:fill-fuchsia-500 dark:group-hover:fill-fuchsia-300 dark:fill-slate-400"></path>
                                <path d="M13 12C13 11.4477 13.4477 11 14 11H17C17.5523 11 18 11.4477 18 12V17C18 17.5523 17.5523 18 17 18H14C13.4477 18 13 17.5523 13 17V12Z" fill="#F0ABFC" className="fill-fuchsia-300 group-hover:fill-fuchsia-400 dark:fill-slate-500"></path>
                            </svg></div>Elements
                        </a></li>
                    <li><a href="https://www.youtube.com/tailwindlabs" className="group flex items-center lg:text-sm lg:leading-6 mb-4 font-medium text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300">
                            <div className="mr-4 rounded-md ring-1 ring-slate-900/5 shadow-sm group-hover:shadow group-hover:ring-slate-900/10 dark:ring-0 dark:shadow-none dark:group-hover:shadow-none dark:group-hover:highlight-white/10 group-hover:shadow-pink-200 dark:group-hover:bg-skin-accent dark:bg-slate-800 dark:highlight-white/5"><svg className="h-6 w-6" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clipRule="evenodd" d="M19 12a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" className="fill-pink-400 group-hover:fill-pink-500 dark:group-hover:fill-pink-300 dark:fill-slate-600"></path>
                                <path d="M11.082 9.107a.685.685 0 0 0-.72-.01.757.757 0 0 0-.362.653v4.5c0 .27.138.52.362.653.224.133.5.13.72-.01l3.571-2.25A.758.758 0 0 0 15 12a.758.758 0 0 0-.347-.643l-3.571-2.25Z" className="fill-pink-50 group-hover:fill-pink-100 dark:group-hover:fill-white dark:fill-slate-400"></path>
                            </svg></div>Emails
                        </a></li>
                  
                
                    <li className="mt-12 lg:mt-8">
                        <h5 className="mb-8 lg:mb-3 font-semibold text-slate-900 dark:text-slate-200">Getting Started</h5>
                        <ul className="space-y-6 lg:space-y-2 border-l border-slate-100 dark:border-slate-800">
                            <li><a className="block border-l pl-4 -ml-px border-transparent hover:border-slate-400 dark:hover:border-slate-500 text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300" href="/docs/installation">Installation</a></li>
                            <li><a className="block border-l pl-4 -ml-px border-transparent hover:border-slate-400 dark:hover:border-slate-500 text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300" href="/docs/editor-setup">Editor Setup</a></li>
                            <li><a className="block border-l pl-4 -ml-px border-transparent hover:border-slate-400 dark:hover:border-slate-500 text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300" href="/docs/using-with-preprocessors">Using with Preprocessors</a></li>
                            <li><a className="block border-l pl-4 -ml-px border-transparent hover:border-slate-400 dark:hover:border-slate-500 text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300" href="/docs/optimizing-for-production">Optimizing for Production</a></li>
                            <li><a className="block border-l pl-4 -ml-px border-transparent hover:border-slate-400 dark:hover:border-slate-500 text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300" href="/docs/browser-support">Browser Support</a></li>
                            <li><a className="block border-l pl-4 -ml-px border-transparent hover:border-slate-400 dark:hover:border-slate-500 text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300" href="/docs/upgrade-guide">Upgrade Guide</a></li>
                        </ul>
                    </li>
                    <li className="mt-12 lg:mt-8">
                        <h5 className="mb-8 lg:mb-3 font-semibold text-slate-900 dark:text-slate-200">Core Concepts</h5>
                        <ul className="space-y-6 lg:space-y-2 border-l border-slate-100 dark:border-slate-800">
                            <li><a className="block border-l pl-4 -ml-px border-transparent hover:border-slate-400 dark:hover:border-slate-500 text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300" href="/docs/utility-first">Utility-First Fundamentals</a></li>
                            <li><a className="block border-l pl-4 -ml-px border-transparent hover:border-slate-400 dark:hover:border-slate-500 text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300" href="/docs/hover-focus-and-other-states">Hover, Focus, and Other States</a></li>
                            <li><a className="block border-l pl-4 -ml-px border-transparent hover:border-slate-400 dark:hover:border-slate-500 text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300" href="/docs/responsive-design">Responsive Design</a></li>
                            <li><a className="block border-l pl-4 -ml-px border-transparent hover:border-slate-400 dark:hover:border-slate-500 text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300" href="/docs/dark-mode">Dark Mode</a></li>
                            <li><a className="block border-l pl-4 -ml-px border-transparent hover:border-slate-400 dark:hover:border-slate-500 text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300" href="/docs/reusing-styles">Reusing Styles</a></li>
                            <li><a className="block border-l pl-4 -ml-px border-transparent hover:border-slate-400 dark:hover:border-slate-500 text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300" href="/docs/adding-custom-styles">Adding Custom Styles</a></li>
                            <li><a className="block border-l pl-4 -ml-px border-transparent hover:border-slate-400 dark:hover:border-slate-500 text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300" href="/docs/functions-and-directives">Functions &amp; Directives</a></li>
                        </ul>
                    </li>

                </ul>
                </nav>

            </div>
            </aside>



            <div className="flex flex-col">
                <div className="flex justify-between">

                    <div className="sticky top-0 -ml-0.5 pointer-events-none">
                    <div className="bg-white dark:bg-slate-900 relative pointer-events-auto">

                        <button type="button" className="hidden w-full lg:flex items-center text-sm leading-6 text-slate-400 rounded-md ring-1 ring-slate-900/10 shadow-sm py-1.5 pl-2 pr-3 hover:ring-slate-300 dark:bg-slate-800 dark:highlight-white/5 dark:hover:bg-slate-700">
                            <svg width="24" height="24" fill="none" aria-hidden="true" className="mr-3 flex-none">
                                <path d="m19 19-3.5-3.5" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"></path>
                                <circle cx="11" cy="11" r="6" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"></circle>
                            </svg>
                            Quick search...
                            <span className="ml-auto pl-3 flex-none text-xs font-semibold">Ctrl K</span>
                        </button>

                    </div>
                    </div>

                    <div>
                        filters
                    </div>

                </div>


                <div className="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <CardPage />
                    <CardPage />
                    <CardPage />
                    <CardPage />
                    <CardPage />
                </div>


            </div>
            
        </div>
        </CompanyLayout>
    )
}

export default WebsiteIndex;