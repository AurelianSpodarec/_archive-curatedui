import { supabase } from "../../../services/supabase/api";
import CompanyLayout from "./_components/CompanyLayout";

function CompanyView({ company }:any) {
    console.log(company)
    return (
        <CompanyLayout company={company}>

                {company.name}

        </CompanyLayout>
    )
}

export default CompanyView;

export const getStaticPaths = async () => {
    const { data: companies }:any = await supabase.from('companies').select('slug');

    const paths = companies.map(({ slug }:any) => ({
        params: {
            slug: [slug],
        },
    }));

    // console.log("@@@@@@@@@@@@@@@@@@@paths",JSON.stringify(paths, null, 2))

    return {
        paths,
        fallback: false
    };

}

export const getStaticProps = async ({ params: { slug } }:any) => {
    const { data: company } = await supabase
        .from('companies')
        .select('*')
        .eq('slug', slug)
        .single();

    return {
        props: {
            company,
        }
    }
}













{/* 
        Company Page: Google
        ================================
        About, Products, Website, Webapp, 







        Company Page: Discord
        =================================
        About, Website, Webapp, Mobile

        [Website]: Sites, Pages, Components, OG Images
        [Mobile: iOS/Android]: Apps, Screens, Components, App Icon
        [Computer App: Mac/Window]: Computer Apps, Desktop Icon









        Filter Type: Website, Mobile, Computer Application

        [Website]: Sites, Pages, Components, OG Images
        [Mobile: iOS/Android]: Apps, Screens, Components, App Icon
        [Computer App: Mac/Window]: Computer Apps, Desktop Icon






            = Companies
                - Name
                - URL Link: website and app store

            = About

            = Color Palette

            = Websites [versioning]
                - Pages
                - Components
                - OG Images

            = WebApp/Mobile App
                - Screens
                - Components
                - Mobile Icon

 */}


         

            {/* googleeeeeeeeeeee

            Company

            Company Can Have:
            =Discord:
            Website
            Webapp
            Mobile App iOS/Android

            Other products

            ==
            =Google Can Have:

            Products: Gmail, Analytics, Search Engine
            YouTube

            Google Uses material UI desing

            Have color palette  

            OG Images */}