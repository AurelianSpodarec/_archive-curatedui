import Container from "../../../../components/layouts/Container"
import MainLayout from "../../../../components/layouts/MainLayout"

import CompanyBackground from "./Banner/CompanyBackground"
import CompanyNavigation from "./Banner/CompanyNavigation"


function CompanyLayout({company, children}:any) {
    
    return (
        <MainLayout>
            
                <CompanyBackground>
                <div className="mx-auto max-w-10xl px-4 sm:px-6 lg:px-8">
                <div className="relative h-full py-12 lg:py-20 ">

                    <div className="lg:flex lg:justify-between mb-12 z-20 relative">

                        <div className="flex items-center text-gray-900 mb-6">
                            <img className="mr-4 rounded-3xl w-16 h-16 lg:w-28 lg:h-28 object-cover" src={company && company.logo} alt={`${company && company.name} logo`} />
                            <div className="flex flex-col">
                                <h1 className="text-2xl lg:text-4xl text-white font-bold">{company && company.name}</h1>
                                <span></span>
                                <span className="text-white">eCommerce - Real Estate</span>
                            </div>
                        </div>

                        <div className="flex">
                            <div>
                                <span className="block text-white font-bold lg:text-right">Website</span>
                                <a className="text-blue-300" href="https://stripe.com">https://stripe.com</a>
                            </div>
                        </div>

                    </div>

                    <CompanyNavigation />

                </div>      
                </div>
                </CompanyBackground>
                
                <section>
                    <Container>
                        {children}
                    </Container>
                </section>

        </MainLayout>
    )
}

export default CompanyLayout;

function CompanyView() {
    return (
        <div>
            hi
        </div>
    )
}

CompanyView.getLayout = function (page:any) {
    return <CompanyLayout>{page}</CompanyLayout>
}