function CompanyBackground({children}:any) {
    return (
        <div className="relative bg-center mb-20" style={{"background": "url('https://www.incimages.com/uploaded_files/image/1920x1080/founders3_85311.jpg')", "backgroundPosition": "center center" }}>

        <div className="lg:z-10 opacity-80 absolute top-0 right-0 bottom-0 left-0 bg-[#101523]"></div>

            {children}
        </div>
    )
}

export default CompanyBackground;