import Link from "next/link";
import { useRouter } from "next/router";

function CompanyNavigation() {
    const router = useRouter();
    // console.log(router)
    return (
        <div className="lg:absolute lg:bottom-0 lg:z-20 left-0 right-0">
        <div className="w-full max-w-xl px-2 pb-10 sm:px-0">

            <nav className="lg:flex space-x-1 rounded-xl bg-slate-900/60 p-1.5" role="tablist" aria-orientation="horizontal"> 
                <Link href={`/inspiration/companies/${router.query.slug}`} className="block text-center w-full rounded-lg px-6 py-2.5 text-sm font-medium leading-5 ring-white ring-opacity-60 ring-offset-2 ring-offset-pink-400 focus:outline-none focus:ring-2  text-slate-700 bg-white">
                    Overview
                </Link>
                <Link href={` /inspiration/companies/${router.query.slug}/website`}className="block text-center w-full rounded-lg px-6 py-2.5 text-sm font-medium leading-5 ring-white ring-opacity-60 ring-offset-2 ring-offset-pink-400 focus:outline-none focus:ring-2  text-slate-400  hover:bg-white/[0.12] hover:text-white">
                    Website
                </Link>
                <Link href={` /inspiration/companies/${router.query.slug}/webapp`}className="block text-center w-full rounded-lg px-6 py-2.5 text-sm font-medium leading-5 ring-white ring-opacity-60 ring-offset-2 ring-offset-pink-400 focus:outline-none focus:ring-2  text-slate-400  hover:bg-white/[0.12] hover:text-white">
                    Webapp
                </Link>
                <Link href={` /inspiration/companies/${router.query.slug}/mobile`}className="block text-center w-full rounded-lg px-6 py-2.5 text-sm font-medium leading-5 ring-white ring-opacity-60 ring-offset-2 ring-offset-pink-400 focus:outline-none focus:ring-2  text-slate-400  hover:bg-white/[0.12] hover:text-white">
                    Mobile
                </Link>
                <Link href={` /inspiration/companies/${router.query.slug}/application`}className="block text-center w-full rounded-lg px-6 py-2.5 text-sm font-medium leading-5 ring-white ring-opacity-60 ring-offset-2 ring-offset-pink-400 focus:outline-none focus:ring-2  text-slate-400  hover:bg-white/[0.12] hover:text-white">
                    Application
                </Link>
                <Link href={` /inspiration/companies/${router.query.slug}/products`}className="block text-center w-full rounded-lg px-6 py-2.5 text-sm font-medium leading-5 ring-white ring-opacity-60 ring-offset-2 ring-offset-pink-400 focus:outline-none focus:ring-2  text-slate-400  hover:bg-white/[0.12] hover:text-white">
                    Products
                {/* (Link to other 'companies') */}
                </Link>
            </nav>

        </div>
        </div>
    )
}

export default CompanyNavigation;