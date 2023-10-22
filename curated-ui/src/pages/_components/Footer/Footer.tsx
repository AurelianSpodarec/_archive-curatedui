function Footer() {
    return (
        <footer className="bg-[#f9fafb] mt-12">
        <div className="border-t py-8">
            

            <div className="mx-auto max-w-10xl px-4 sm:px-6 lg:px-8">
            <div className="md:flex justify-between items-center">

                <div className="mt-8 md:mt-0 "> 
                    <p className="text-center text-sm text-black">
                        © Copyright 2022. All Rights Reserved
                    </p>
                </div>
                
                <nav>
                    <a href="/scripts" className="text-sm pl-10 font-medium text-black hover:text-gray-900">Discord</a>
                    <a href="/scripts" className="text-sm pl-10 font-medium text-black hover:text-gray-900">Companies</a>
                    <a href="/docs" className="text-sm pl-10 font-medium text-black hover:text-gray-900">Legal</a>
                    <a href="/scripts" className="text-sm pl-10 font-medium text-black hover:text-gray-900">Terms &amp; Conditions</a>
                </nav> 

            </div>
            </div>


        </div>
        </footer>
    )
}

export default Footer;