
interface Page {
    id: string;
    parentCompanyID: string;

    name: string;
    slug: string;
    image: string;

}

const pages = [
    {
        
    }
]

function fetchAllPages() {
    return pages;
}

export {
    fetchAllPages
}