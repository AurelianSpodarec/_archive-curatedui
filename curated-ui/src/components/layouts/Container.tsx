function Container({children}:any) {
    return (
        <div className="mx-auto max-w-10xl px-4 sm:px-6 lg:px-8">
            {children}
        </div>
    )
}

export default Container;