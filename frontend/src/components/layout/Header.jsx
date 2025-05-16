const Header = ({ headerTitle }) => {
    return (
        <div className="flex justify-between items-center py-3 sm:py-3">
            <h1 className="text-xl sm:text-2xl md:text-3xl font-bold">{headerTitle}</h1>
        </div>
    );
};

Header.propTypes;

export default Header;