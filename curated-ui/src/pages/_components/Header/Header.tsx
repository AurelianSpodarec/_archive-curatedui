import Link from "next/link"
import MainNavigation from "./MainNavigation"
import MainLogo from "./MainLogo"

function NavigationMobile() {
    return (
        <div>

        </div>
    )
}

function NavigationDesktop() {
    return(
        <div>

        </div>
    )
}


function Header() {
    return (
        <header className="z-40 bg-white py-2 text-sm font-medium text-gray-900 shadow-sm ring-1 ring-gray-900 ring-opacity-5">
        <div className="mx-auto max-w-10xl px-4 sm:px-6 lg:px-8">

            <div className="hidden lg:flex relative h-14 items-center justify-between">
                <div className="flex items-center justify-between w-full md:w-auto">
                    <MainLogo />
                    <MainNavigation />
                </div>

                {/* <div>
                    <a href="" className="text-sm font-medium text-gray-500 hover:text-gray-900">Sign in</a>
                    <a href="" className="ml-8 inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-skin-accent hover:bg-pink-600">Sign up</a>
                </div> */}
            </div> 

            <div className="flex lg:hidden relative h-14 items-center justify-between">
                <div className="flex items-center justify-between w-full md:w-auto">
                    <a href="http://curated-ui.test" className="flex items-center mr-10">
                        <img className="w-12 h-12" src="https://avatars.githubusercontent.com/u/106281622?s=200&amp;v=4" />
                        <span className="inline-block text-black text-2xl font-bold">CuratedUI
                            
                        </span>
                        <span className="sr-only">Curated UI</span>
                    </a>
                </div>
            </div>

        </div>
        </header>
    )
}

export default Header;