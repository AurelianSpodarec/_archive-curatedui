import Link from "next/link";

function CardCompany({ data }: any) {
    if(!data) return <></>
    return (
        <article>
        <Link href={`companies/${data.slug}`}>
            
            <div className="flex items-center">
                <img className="object-cover h-14 w-14 rounded-lg mr-5" src={data.logo} />
                <h3>{data.name}</h3>
            </div>

        </Link>
        </article>
    )
}

export default CardCompany;