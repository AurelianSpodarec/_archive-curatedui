function CardPage() {
    return (
        <article className="js-site-page group relative cursor-pointer border rounded-xl h-[400px] border-gray-200 overflow-hidden">

    
            <img src="https://curated-ui.test/storage/2/ArtZe67ri4YeKGVq0wcMv2eU7TOKt4-metac2NyZWVuY2FwdHVyZS1zdXBhYmFzZS0yMDIyLTA4LTAxLTA0XzUwXzI5LnBuZw==-.png" className="js-image bg-cover w-full object-cover group-hover:scale-105 transition-transform" />


            <div className="absolute top-3 right-3 transition invisible group-hover:visible">
            <button aria-label="White button" type="button" className="flex content-center items-center justify-center text-center px-2.5 py-1.5 border border-gray-300 shadow-sm text-xs font-medium rounded text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-500 rounded-lg fav-button">
                
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth="2" className="w-4 h-4 text-red-500 fav-1">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                </svg>
                

            </button>
            </div>

            <div className="absolute bottom-5 left-0 right-0 text-center invisible group-hover:visible">
                <div className="bg-white rounded-lg inline-block px-2 py-1 border text-sm">Careers</div>
            </div>

        </article>
    )
}

export default CardPage;