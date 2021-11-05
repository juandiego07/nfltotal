import { Fragment } from "react";
import { Link } from "react-router-dom";

 const Header = (props) => {
  return (
    <Fragment>
      <nav className="navbar navbar-expand-lg navbar-dark bg-dark">
        <div className="container-fluid">
          <Link className="navbar-brand" to="/teams">
            NFL TOTAL
          </Link>
          <button
            className="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span className="navbar-toggler-icon"></span>
          </button>
          <div className="collapse navbar-collapse" id="navbarNavDropdown">
            <ul className="navbar-nav">
              <li className="nav-item">
                <Link
                  className="nav-link active"
                  aria-current="page"
                  to="/teams"
                >
                  Home
                </Link>
              </li>
              <li className="nav-item">
                <Link className="nav-link" to="/Register/Create">
                  Teams
                </Link>
              </li>
              <li className="nav-item">
                <Link className="nav-link" to="/games">
                  Games
                </Link>
              </li>
              <li className="nav-item">
                <Link className="nav-link" to="/teams">
                  Ranking
                </Link>
              </li>
              <div className="nav-item dropdown">
                <Link
                  className="nav-link dropdown-toggle"
                  to="/list"
                  id="navbarDropdownMenuLink"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Juan Diego Vargas Posada
                </Link>
                <ul
                  className="dropdown-menu"
                  aria-labelledby="navbarDropdownMenuLink"
                >
                  <li>
                    <Link className="dropdown-item" to="/teams">
                      Logout
                    </Link>
                  </li>
                </ul>
              </div>
            </ul>
          </div>
        </div>
      </nav>
    </Fragment>
  );
}

export default Header;