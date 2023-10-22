import Container from "../../../components/layouts/Container";
import MainLayout from "../../../components/layouts/MainLayout";
import CardPage from "../../../components/molecules/CardPage";

function Pages() {
    return (
       <MainLayout>

            <Container>
            <div className="grid grid-cols-1 md:grid-cols-5 gap-6">
                <CardPage />
                <CardPage />
                <CardPage />
                <CardPage />
            </div>
            </Container>
        
        </MainLayout>
    )
}

export default Pages;