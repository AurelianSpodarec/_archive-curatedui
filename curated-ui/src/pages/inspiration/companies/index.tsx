import Container from "../../../components/layouts/Container"
import MainLayout from "../../../components/layouts/MainLayout"
import { supabase } from "../../../services/supabase/api";
import ListCompanies from "./_components/ListCompanies";
 

function CompanyIndex({ companies, error }:any) {
    return (
        <MainLayout>
            
            Filter:
            - Brand Color: Red, Green, Orange etc...
            - Theme: Light/Dark [custom]
            - Industry: Automobile, Accounting, Health, Real Estate
            - Type: 
            


            companies


            category_industries
            category_brand_colors



            company
            - microsfot

            product
            - LinkedIn
            - github
            - discord: product_category: [website, webapp, mobileapp]


            Product Categories
            -website
            -webapp
            -mobileapp(iOS/Android)
            -game


            Discord: Website(landing page), webapp, mobile(iOS/Android), 







            <Container>
            <div className="grid grid-cols-1 md:grid-cols-5 gap-6">     

                <ListCompanies companies={companies} />

            </div>
            </Container>

        </MainLayout>
    )
}

export default CompanyIndex;

export const getStaticProps = async () => {
    const { data: companies, error } = await supabase.from('companies').select('*');

    return {
        props: {
            companies,
            error
        }
    }
}