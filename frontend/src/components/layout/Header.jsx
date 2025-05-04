const Header = ({ headerTitle }) => {
    return (
        <div className="flex justify-between items-center p-5">
            <h1 className="text-3xl font-bold">{headerTitle}</h1>
        </div>
    );
};

Header.propTypes;

export default Header;