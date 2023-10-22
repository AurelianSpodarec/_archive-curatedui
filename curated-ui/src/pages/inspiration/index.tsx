import Link from "next/link";
import Container from "../../components/layouts/Container"
import MainLayout from "../../components/layouts/MainLayout"
import CardPage from "../../components/molecules/CardPage"


function MenuItem() {
    return (
        <div className="border-2 bg-gray-200 transition rounded-lg font-medium border-slate-100 text-slate-400/80 hover:text-slate-400 hover:border-slate-200">
            <a className="block text-sm py-2 px-5" href="http://curated-ui.test/inspiration/sites">Sites</a>
        </div>
    )
}
 
function InspirationIndex() {
    return (
        <MainLayout>


            <div className="mx-auto max-w-10xl px-4 sm:px-6 lg:px-8">
            <section className="flex relative mt-12 mb-12">
                <div className="flex justify-between items-center w-full">

                    <div className="flex">

                        <div className="flex space-x-2 items-center mr-6">
                            <div className="border-2 bg-gray-200 transition rounded-lg font-medium border-slate-100 text-slate-400/80 hover:text-slate-400 hover:border-slate-200">
                                <a className="block text-sm py-2 px-5" href="http://curated-ui.test/inspiration/sites">Sites</a>
                            </div>
                            <div className="border-2 bg-gray-200 transition rounded-lg font-medium  border-slate-400 text-slate-500">
                                <a className="block text-sm py-2 px-5" href="http://curated-ui.test/inspiration/pages">Pages</a>
                            </div>
                            <div className="border-2 bg-gray-200 transition rounded-lg font-medium border-slate-100 text-slate-400/80 hover:text-slate-400 hover:border-slate-200">
                                <a className="block text-sm py-2 px-5" href="http://curated-ui.test/inspiration/components">Components</a>
                            </div>
                            <div className="border-2 bg-gray-200 transition rounded-lg font-medium border-slate-100 text-slate-400/80 hover:text-slate-400 hover:border-slate-200">
                                <a className="block text-sm py-2 px-5" href="http://curated-ui.test/inspiration/og-images">OG Images</a>
                            </div>
                        </div>

                        <div className="js-dropdown-wrap">

                        <button className="js-dropdown-button inline-flex w-full justify-center rounded-md bg-black bg-opacity-20 px-4 py-2 text-sm font-medium text-white hover:bg-opacity-30 focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-opacity-75" id="headlessui-menu-button-:R6:" type="button" aria-haspopup="true" aria-expanded="false">
                            Options
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" className="ml-2 -mr-1 h-5 w-5 text-violet-200 hover:text-violet-100">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clipRule="evenodd"></path>
                            </svg>
                        </button>

                        <div className="invisible transition-opacity duration-150 ease-in-out opacity-0 z-10 bg-white shadow-2xl p-8 absolute left-0 right-0 overflow-y-auto max-h-[500px] top-[60px]">
                            <div className="">
                                <h5 className="font-bold mb-2">General</h5>
                                <ul className="grid grid-cols-6 gap-4">
                                    <li>
                                    <a href="http://curated-ui.test/inspiration/pages/home">
                                        <div className="h-12 overflow-hidden relative">

                                            <div className="absolute top-0 right-0 bottom-0 left-0">
                                                <div className="absolute top-0 right-0 bottom-0 left-0">

                                                </div>
                                                <span className="ease-in duration-150 rounded absolute top-0 right-0 bottom-0 left-0 bg-black/50 hover:bg-pink-600">
                                                <div className="relative h-full w-full flex align-middle">
                                                    <span className="m-auto text-white font-bold">Home</span>
                                                </div>
                                                </span>
                                            </div>

                                        </div>
                                    </a>
                                    </li>
                                    <li>
                                    <a href="http://curated-ui.test/inspiration/pages/about">
                                        <div className="h-12 overflow-hidden relative">

                                            <div className="absolute top-0 right-0 bottom-0 left-0">
                                                <div className="absolute top-0 right-0 bottom-0 left-0">

                                                </div>
                                                <span className="ease-in duration-150 rounded absolute top-0 right-0 bottom-0 left-0 bg-black/50 hover:bg-pink-600">
                                                <div className="relative h-full w-full flex align-middle">
                                                    <span className="m-auto text-white font-bold">About</span>
                                                </div>
                                                </span>
                                            </div>

                                        </div>
                                    </a>
                                    </li>
                                    <li>
                                    <a href="http://curated-ui.test/inspiration/pages/contact">
                                        <div className="h-12 overflow-hidden relative">

                                            <div className="absolute top-0 right-0 bottom-0 left-0">
                                                <div className="absolute top-0 right-0 bottom-0 left-0">

                                                </div>
                                                <span className="ease-in duration-150 rounded absolute top-0 right-0 bottom-0 left-0 bg-black/50 hover:bg-pink-600">
                                                <div className="relative h-full w-full flex align-middle">
                                                    <span className="m-auto text-white font-bold">Contact</span>
                                                </div>
                                                </span>
                                            </div>

                                        </div>
                                    </a>
                                    </li>
                                    <li>
                                    <a href="http://curated-ui.test/inspiration/pages/cart">
                                        <div className="h-12 overflow-hidden relative">

                                            <div className="absolute top-0 right-0 bottom-0 left-0">
                                                <div className="absolute top-0 right-0 bottom-0 left-0">

                                                </div>
                                                <span className="ease-in duration-150 rounded absolute top-0 right-0 bottom-0 left-0 bg-black/50 hover:bg-pink-600">
                                                <div className="relative h-full w-full flex align-middle">
                                                    <span className="m-auto text-white font-bold">Cart</span>
                                                </div>
                                                </span>
                                            </div>

                                        </div>
                                    </a>
                                    </li>
                                    <li>
                                    <a href="http://curated-ui.test/inspiration/pages/careers">
                                        <div className="h-12 overflow-hidden relative">

                                            <div className="absolute top-0 right-0 bottom-0 left-0">
                                                <div className="absolute top-0 right-0 bottom-0 left-0">

                                                </div>
                                                <span className="ease-in duration-150 rounded absolute top-0 right-0 bottom-0 left-0 bg-black/50 hover:bg-pink-600">
                                                <div className="relative h-full w-full flex align-middle">
                                                    <span className="m-auto text-white font-bold">Careers</span>
                                                </div>
                                                </span>
                                            </div>

                                        </div>
                                    </a>
                                    </li>
                                    <li>
                                    <a href="http://curated-ui.test/inspiration/pages/pricing">
                                        <div className="h-12 overflow-hidden relative">

                                            <div className="absolute top-0 right-0 bottom-0 left-0">
                                                <div className="absolute top-0 right-0 bottom-0 left-0">

                                                </div>
                                                <span className="ease-in duration-150 rounded absolute top-0 right-0 bottom-0 left-0 bg-black/50 hover:bg-pink-600">
                                                <div className="relative h-full w-full flex align-middle">
                                                    <span className="m-auto text-white font-bold">Pricing</span>
                                                </div>
                                                </span>
                                            </div>

                                        </div>
                                    </a>
                                    </li>
                                    <li>
                                    <a href="http://curated-ui.test/inspiration/pages/team">
                                        <div className="h-12 overflow-hidden relative">

                                            <div className="absolute top-0 right-0 bottom-0 left-0">
                                                <div className="absolute top-0 right-0 bottom-0 left-0">

                                                </div>
                                                <span className="ease-in duration-150 rounded absolute top-0 right-0 bottom-0 left-0 bg-black/50 hover:bg-pink-600">
                                                <div className="relative h-full w-full flex align-middle">
                                                    <span className="m-auto text-white font-bold">Team</span>
                                                </div>
                                                </span>
                                            </div>

                                        </div>
                                    </a>
                                    </li>
                                    <li>
                                    <a href="http://curated-ui.test/inspiration/pages/services">
                                        <div className="h-12 overflow-hidden relative">

                                            <div className="absolute top-0 right-0 bottom-0 left-0">
                                                <div className="absolute top-0 right-0 bottom-0 left-0">

                                                </div>
                                                <span className="ease-in duration-150 rounded absolute top-0 right-0 bottom-0 left-0 bg-black/50 hover:bg-pink-600">
                                                <div className="relative h-full w-full flex align-middle">
                                                    <span className="m-auto text-white font-bold">Services</span>
                                                </div>
                                                </span>
                                            </div>

                                        </div>
                                    </a>
                                    </li>
                                    <li>
                                    <a href="http://curated-ui.test/inspiration/pages/case-studies">
                                        <div className="h-12 overflow-hidden relative">

                                            <div className="absolute top-0 right-0 bottom-0 left-0">
                                                <div className="absolute top-0 right-0 bottom-0 left-0">

                                                </div>
                                                <span className="ease-in duration-150 rounded absolute top-0 right-0 bottom-0 left-0 bg-black/50 hover:bg-pink-600">
                                                <div className="relative h-full w-full flex align-middle">
                                                    <span className="m-auto text-white font-bold">Case Studies</span>
                                                </div>
                                                </span>
                                            </div>

                                        </div>
                                    </a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        </div>

                    </div>

                    <div className="flex">

                        <div className="inline-flex flex-wrap items-center justify-center w-auto p-1 bg-white border rounded space-x-1">
                        <a href="/inspiration/pages?device=mobile" className="w-8 h-8 rounded flex items-center justify-center focus:outline-none hover:bg-slate-100 text-slate-300">
                            <span className="sr-only">Switch to desktop theme</span>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.6666 1.3335H5.33331C4.19998 1.3335 3.33331 2.20016 3.33331 3.3335V12.6668C3.33331 13.8002 4.19998 14.6668 5.33331 14.6668H10.6666C11.8 14.6668 12.6666 13.8002 12.6666 12.6668V3.3335C12.6666 2.20016 11.8 1.3335 10.6666 1.3335ZM7.99998 12.0002C7.59998 12.0002 7.33331 11.7335 7.33331 11.3335C7.33331 10.9335 7.59998 10.6668 7.99998 10.6668C8.39998 10.6668 8.66665 10.9335 8.66665 11.3335C8.66665 11.7335 8.39998 12.0002 7.99998 12.0002Z" fill="currentColor"></path>
                            </svg>
                        </a> <a href="/inspiration/pages?device=desktop" className="w-8 h-8 rounded flex items-center justify-center focus:outline-none hover:bg-slate-100 text-slate-300">
                            <span className="sr-only">Switch to mobile theme</span>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.6667 2H3.33334C2.20001 2 1.33334 2.86667 1.33334 4V9.33333C1.33334 10.4667 2.20001 11.3333 3.33334 11.3333H7.33334V12.6667H4.66668C4.26668 12.6667 4.00001 12.9333 4.00001 13.3333C4.00001 13.7333 4.26668 14 4.66668 14H11.3333C11.7333 14 12 13.7333 12 13.3333C12 12.9333 11.7333 12.6667 11.3333 12.6667H8.66668V11.3333H12.6667C13.8 11.3333 14.6667 10.4667 14.6667 9.33333V4C14.6667 2.86667 13.8 2 12.6667 2Z" fill="currentColor"></path>
                            </svg>
                        </a>
                        </div>
                        <div className="hidden sm:block mx-6 lg:mx-4 w-px h-full bg-gray-200"></div>
                        <button className="flex h-[36px] items-center justify-center gap-1.5 rounded-md bg-gray-100 p-2.5 text-xs font-medium text-neutral-600 active:shadow-none dark:bg-bgDarker dark:text-light sm:transition-all sm:hover:shadow-md sm:active:scale-95"><svg stroke="currentColor" fill="currentColor" strokeWidth="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M256 160c-52.9 0-96 43.1-96 96s43.1 96 96 96 96-43.1 96-96-43.1-96-96-96zm246.4 80.5l-94.7-47.3 33.5-100.4c4.5-13.6-8.4-26.5-21.9-21.9l-100.4 33.5-47.4-94.8c-6.4-12.8-24.6-12.8-31 0l-47.3 94.7L92.7 70.8c-13.6-4.5-26.5 8.4-21.9 21.9l33.5 100.4-94.7 47.4c-12.8 6.4-12.8 24.6 0 31l94.7 47.3-33.5 100.5c-4.5 13.6 8.4 26.5 21.9 21.9l100.4-33.5 47.3 94.7c6.4 12.8 24.6 12.8 31 0l47.3-94.7 100.4 33.5c13.6 4.5 26.5-8.4 21.9-21.9l-33.5-100.4 94.7-47.3c13-6.5 13-24.7.2-31.1zm-155.9 106c-49.9 49.9-131.1 49.9-181 0-49.9-49.9-49.9-131.1 0-181 49.9-49.9 131.1-49.9 181 0 49.9 49.9 49.9 131.1 0 181z"></path>
                        </svg><span className="hidden whitespace-nowrap sm:block">Dark mode</span></button>

                    </div>

                </div>
            </section>
            </div>


            <Container>
            <div className="grid grid-cols-1 md:grid-cols-5 gap-6">
                <CardPage />
            </div>
            </Container>

        </MainLayout>
    )
}

export default InspirationIndex;