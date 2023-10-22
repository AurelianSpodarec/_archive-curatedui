interface Company {
    id: string;
    // userID: string;
    // companyCategoryTypeID: string;
    // companyIndustryID: string;
    // companyBrandColorID: string;
    // tagsID: string;

    name: string;
    description?: string;
    slug: string;
    logo?: string;
    thumbnail?: string;
    banner?: string;


    isVisible?: boolean;
    publishedAt: string;
}



const companies:any[] = [
    {
        id: "",
        name: "Google",
        description: "",
        slug: "google",
        logo: "",
        thumbnail: "",
        banner: "",
        url: "",
        
        isVisible: true,
    }
]

function fetchAllCompanies() {
    return companies;
}

export {
    fetchAllCompanies
}

// export default 