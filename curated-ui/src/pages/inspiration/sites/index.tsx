import Link from "next/link";
import Container from "../../../components/layouts/Container"
import MainLayout from "../../../components/layouts/MainLayout"
import CardPage from "../../../components/molecules/CardPage"

 
function Sites() {
    return (
        <MainLayout>

                Inspiration sites 

                <Container>
                <div className="grid grid-cols-1 md:grid-cols-5 gap-6">
                    <Link href="/inspiration/sites/google">
                        <CardPage />
                    </Link>
                </div>
                </Container>

        </MainLayout>
    )
}

export default Sites;