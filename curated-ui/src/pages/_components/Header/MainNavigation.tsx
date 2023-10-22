import Link from "next/link";

function MainNavigation() {
    return (
    <nav className="flex items-center">

        <Link href="/inspiration/companies" className="flex items-center">
            Companies
        </Link>



        {/* <div className="js-dropdown-wrap relative">
            
            <button className="text-sm font-medium text-slate-700 hover:text-slate-900 pr-8 js-dropdown-button">
            <div className="flex items-center">
                <span>Inspiration</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" className="ml-2 -mr-1 h-5 w-5 text-slate-700 hover:text-violet-100"><path fillule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clipRule="evenodd"></path></svg>
            </div>
            </button>
            

            <div className="js-dropdown-menu invisible absolute bg-white z-40 -left-8 pt-3 px-2 sm:px-0 opacity-0 ease-in-out duration-100">
            <div className="w-[400px] overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
            <div className="relative grid gap-8 bg-white p-7">
                    
                <a href="http://curated-ui.test/inspiration/products" className="-m-3 flex items-center rounded-lg p-2 transition duration-150 ease-in-out hover:bg-gray-50 focus:outline-none focus-visible:ring focus-visible:ring-pink-500 focus-visible:ring-opacity-50">
                    <div className="flex bg-pink-100 rounded-md h-10 w-10 shrink-0 items-center justify-center text-white sm:h-12 sm:w-12">
                        <svg className="w-8 h-8 fill-pink-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16"><path d="M2 4v10h16V4H2Zm1-1a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM2 0h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2Z"></path></svg>
                    </div>
                    <div className="ml-4">
                        <p className="text-sm font-medium text-gray-900">Products</p>
                        <p className="text-sm text-gray-500">Measure actions your users take</p>
                    </div>
                </a>

                <a href="http://curated-ui.test/inspiration/pages" className="-m-3 flex items-center rounded-lg p-2 transition duration-150 ease-in-out hover:bg-gray-50 focus:outline-none focus-visible:ring focus-visible:ring-pink-500 focus-visible:ring-opacity-50">
                    <div className="flex bg-pink-100 rounded-md  h-10 w-10 shrink-0 items-center justify-center text-white sm:h-12 sm:w-12">
                        <svg className="w-8 h-8 stroke-pink-400" width="24" height="24" strokeWidth="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 21.4V2.6C4 2.26863 4.26863 2 4.6 2H16.2515C16.4106 2 16.5632 2.06321 16.6757 2.17574L19.8243 5.32426C19.9368 5.43679 20 5.5894 20 5.74853V21.4C20 21.7314 19.7314 22 19.4 22H4.6C4.26863 22 4 21.7314 4 21.4Z" strokeLinecap="round" strokeLinejoin="round"></path>
                            <path d="M16 5.4V2.35355C16 2.15829 16.1583 2 16.3536 2C16.4473 2 16.5372 2.03725 16.6036 2.10355L19.8964 5.39645C19.9628 5.46275 20 5.55268 20 5.64645C20 5.84171 19.8417 6 19.6464 6H16.6C16.2686 6 16 5.73137 16 5.4Z" strokeLinecap="round" strokeLinejoin="round"></path>
                        </svg>
                    </div>
                    <div className="ml-4">
                        <p className="text-sm font-medium text-gray-900">Pages</p>
                        <p className="text-sm text-gray-500">Measure actions your users take</p>
                    </div>
                </a>

                <a href="http://curated-ui.test/inspiration/components" className="-m-3 flex items-center rounded-lg p-2 transition duration-150 ease-in-out hover:bg-gray-50 focus:outline-none focus-visible:ring focus-visible:ring-pink-500 focus-visible:ring-opacity-50">
                    <div className="flex bg-pink-100 rounded-md  h-10 w-10 shrink-0 items-center justify-center text-white sm:h-12 sm:w-12">
                        <svg className="w-8 h-8 fill-pink-400" version="1.1" viewBox="0 0 36 36" preserveAspectRatio="xMidYMid meet" fill="currentColor"><title>blocks-group-solid</title><path d="M33.53,18.76,26.6,15.57V6.43A1,1,0,0,0,26,5.53l-7.5-3.45a1,1,0,0,0-.84,0l-7.5,3.45a1,1,0,0,0-.58.91v9.14L2.68,18.76a1,1,0,0,0-.58.91v9.78h0a1,1,0,0,0,.58.91l7.5,3.45a1,1,0,0,0,.84,0l7.08-3.26,7.08,3.26a1,1,0,0,0,.84,0l7.5-3.45a1,1,0,0,0,.58-.91h0V19.67A1,1,0,0,0,33.53,18.76ZM25.61,22,20.5,19.67l5.11-2.35,5.11,2.35Zm-1-6.44-6.44,3V10.87a1,1,0,0,0,.35-.08L24.6,8v7.58ZM18.1,4.08l5.11,2.35L18.1,8.78,13,6.43ZM10.6,17.31l5.11,2.35L10.6,22,5.49,19.67Zm6.5,11.49-6.5,3h0V24.11h0A1,1,0,0,0,11,24l6.08-2.8Zm15,0-6.46,3V24.11A1,1,0,0,0,26,24l6.08-2.8Z" className="clr-i-solid clr-i-solid-path-1"></path><rect x="0" y="0" width="36" height="36" fillOpacity="0"></rect></svg>
                    </div>
                    <div className="ml-4">
                        <p className="text-sm font-medium text-gray-900">Components</p>
                        <p className="text-sm text-gray-500">Measure actions your users take</p>
                    </div>
                </a>
                <a href="http://curated-ui.test/inspiration/og-images" className="-m-3 flex items-center rounded-lg p-2 transition duration-150 ease-in-out hover:bg-gray-50 focus:outline-none focus-visible:ring focus-visible:ring-pink-500 focus-visible:ring-opacity-50">
                    <div className="flex bg-pink-100 rounded-md  h-10 w-10 shrink-0 items-center justify-center text-white sm:h-12 sm:w-12">  
                        <svg className="stroke-pink-400 w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth="2">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div className="ml-4">
                        <p className="text-sm font-medium text-gray-900">OG Images</p>
                        <p className="text-sm text-gray-500">Measure actions your users take</p>
                    </div>
                </a>
                
            </div>
            </div>
            </div> 
        </div> */}

        {/* <Link href="/inspiration/sites" className="text-sm font-medium text-slate-700 hover:text-slate-900 pr-8 hover:text-blue-500">
            Templates
        </Link>             */}
                
            
    </nav>
    )
}


export default MainNavigation;