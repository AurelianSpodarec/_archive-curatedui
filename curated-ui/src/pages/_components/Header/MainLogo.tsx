import Link from "next/link";

function MainLogo() {
    return (
        <Link href="/" className="flex items-center mr-10">
            <img className="w-12 h-12" src="https://avatars.githubusercontent.com/u/106281622?s=200&amp;v=4" />
            <span className="inline-block text-black text-2xl font-bold">CuratedUI
                
            </span>
            <span className="sr-only">Curated UI</span>
        </Link>
    )
}

export default MainLogo;