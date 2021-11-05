import React, { Fragment } from "react";

const Item = () => {
  return (
    <Fragment>
      <div className="card">
        <div className="row">
          <div className="col-6">
            <img
              src="https://res.cloudinary.com/nflleague/image/private/f_auto/league/t0p7m5cjdjy18rnzzqbx"
              className="card-img-top"
              alt="TeamA"
            />
          </div>
          <div className="col-6">
            <img
              src="https://res.cloudinary.com/nflleague/image/private/f_auto/league/ocvxwnapdvwevupe4tpr"
              className="card-img-top"
              alt="TeamB"
            />
          </div>
        </div>
        <div className="card-body">
          <div className="row">
            <div className="col-6">
              <h5 className="card-title">Card title</h5>
            </div>
            <div className="col-6">
              <h5 className="card-title">Card title</h5>
            </div>
          </div>
        </div>
        <ul className="list-group list-group-flush">
          <li className="list-group-item">
            <div className="row">
              <div className="form-check col-6 ps-5">
                <input
                  className="form-check-input"
                  type="radio"
                  name="rlMl"
                  id="rlTeamA"
                />
                <label className="form-check-label" htmlFor="rlTeamA">
                  RL +5
                </label>
              </div>
              <div className="form-check col-6 ps-5">
                <input
                  className="form-check-input"
                  type="radio"
                  name="rlMl"
                  id="rlTeamB"
                />
                <label className="form-check-label" htmlFor="rlTeamB">
                  RL -5
                </label>
              </div>
            </div>
          </li>
          <li className="list-group-item">
            <div className="row">
              <div className="form-check col-6 ps-5">
                <input
                  className="form-check-input"
                  type="radio"
                  name="rlMl"
                  id="mlTeamA"
                />
                <label className="form-check-label" htmlFor="mlTeamA">
                  ML
                </label>
              </div>
              <div className="form-check col-6 ps-5">
                <input
                  className="form-check-input"
                  type="radio"
                  name="rlMl"
                  id="mlTeamB"
                />
                <label className="form-check-label" htmlFor="mlTeamB">
                  ML
                </label>
              </div>
            </div>
          </li>
          <li className="list-group-item">
            <div className="row">
              <div className="form-check col-6 ps-5">
                <input
                  className="form-check-input"
                  type="radio"
                  name="AltaBaja"
                  id="Alta"
                />
                <label className="form-check-label" htmlFor="Alta">
                  ALTA
                </label>
              </div>
              <div className="form-check col-6 ps-5">
                <input
                  className="form-check-input"
                  type="radio"
                  name="AltaBaja"
                  id="Baja"
                />
                <label className="form-check-label" htmlFor="Baja">
                  BAJA
                </label>
              </div>
            </div>
          </li>
        </ul>
        <div className="card-body">
          <button className="btn btn-secondary">Save</button>
        </div>
      </div>
    </Fragment>
  );
};

export default Item;
