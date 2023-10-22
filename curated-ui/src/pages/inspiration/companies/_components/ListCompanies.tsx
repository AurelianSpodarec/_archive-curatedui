import CardCompany from "../../../../components/molecules/CardCompany";

function ListCompanies({ companies }:any) {
    return companies.map((company:any, index:number) => {
        return <CardCompany data={company} key={index} />
    })
}

export default ListCompanies;