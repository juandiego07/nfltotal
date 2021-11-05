import { Fragment } from "react";
import { Link } from "react-router-dom";

export default function Item(props) {
  return (
    <Fragment>
      <div className="card">
        <img className="card-img-top" src={props.value.urlImg} alt="logo" />
        <div className="card-body">
          <h5 className="card-title">{props.value.name}</h5>
          <h6 className="card-subtitle">{props.value.conference}</h6>
        </div>
        <div className="card-footer d-inline-flex justify-content-around">
          <Link to={`/Register/${props.value.id}`}>
            <i className="bi bi-pencil-square h3"></i>
          </Link>
        </div>
      </div>
    </Fragment>
  );
}
