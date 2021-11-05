import React, { useEffect, useState } from "react";
import { Fragment } from "react";
import { getData, saveData } from "../../Firebase";

const Form = () => {
  const [teams, setTeams] = useState([]);
  const [teamA, setTeamA] = useState("");
  const [teamB, setTeamB] = useState("");
  const [rlTeamA, setRlTeamA] = useState("");
  const [rlTeamB, setRlTeamB] = useState("");
  const [mlTeamA, setMlTeamA] = useState("");
  const [mlTeamB, setMlTeamB] = useState("");
  const [up, setUp] = useState("");
  const [down, setDown] = useState("");
  const [date, setDate] = useState("");
  const [week, setWeek] = useState("");

  useEffect(() => {
    getTeams();
  }, []);

  const handlerSave = async () => {
    const resultA = teamA.split(",");
    const resultB = teamB.split(",");
    if (teamA.length !== 0 && teamB.length !== 0) {
      const data = {
        date: date,
        week: week,
        nameA: resultA[0],
        nameB: resultB[0],
        urlImgA: resultA[1],
        urlImgB: resultB[1],
        rlTeamA: parseFloat(rlTeamA),
        rlTeamB: parseFloat(rlTeamB),
        mlTeamA: parseFloat(mlTeamA),
        mlTeamB: parseFloat(mlTeamB),
        up: parseFloat(up),
        down: parseFloat(down),
      };
      const response = await saveData("games", data);
      console.log(response);
      setTeamA("");
      setTeamB("");
      setRlTeamA("");
      setRlTeamB("");
      setMlTeamA("");
      setMlTeamB("");
      setUp("");
      setDown("");
      setDate("");
      setWeek("");
      document.getElementById("weeks");
      document.getElementById("teamA");
      document.getElementById("teamB");
    } else {
      console.log("You must select a team");
    }
  };

  async function getTeams() {
    setTeams(await getData("teamsNfl"));
  }
  return (
    <Fragment>
      <div className="container col-12 col-sm-8 col-md-6">
        <div className="card mt-5">
          <div className="card-header">
            <h2>Registrar Juegos</h2>
          </div>
          <div className="card-body">
            <div className="row">
              <div className="col-6 my-2">
                <label htmlFor="weeks" className="form-label">
                  Semana
                </label>
                <select
                  value={week}
                  onChange={(e) => setWeek(e.target.value)}
                  id="weeks"
                  className="form-select"
                  aria-label="Default select example"
                >
                  <option defaultValue></option>
                  <option value="1">Week 1</option>
                  <option value="2">Week 2</option>
                  <option value="3">Week 3</option>
                  <option value="4">Week 4</option>
                  <option value="5">Week 5</option>
                  <option value="6">Week 6</option>
                  <option value="7">Week 7</option>
                  <option value="8">Week 8</option>
                  <option value="9">Week 9</option>
                  <option value="10">Week 10</option>
                  <option value="11">Week 11</option>
                  <option value="12">Week 12</option>
                  <option value="13">Week 13</option>
                  <option value="14">Week 14</option>
                  <option value="15">Week 15</option>
                  <option value="16">Week 16</option>
                  <option value="17">Week 17</option>
                  <option value="18">Week 18</option>
                </select>
              </div>
              <div className="col-6 my-2">
                <label htmlFor="date" className="form-label">
                  Fecha
                </label>
                <input
                  value={date}
                  onChange={(e) => setDate(e.target.value)}
                  type="date"
                  name="date"
                  id="date"
                  className="form-control"
                />
              </div>
              <div className="col-12 col-sm-6">
                <label htmlFor="teamA" className="form-label">
                  Equipo A
                </label>
                <select
                  value={teamA}
                  name="teamA"
                  id="teamA"
                  className="form-select"
                  onChange={(e) => setTeamA(e.target.value)}
                >
                  <option defaultValue></option>
                  {teams?.map((team) => {
                    return (
                      <option key={team.id} value={[team.name, team.urlImg]}>
                        {team.name}
                      </option>
                    );
                  })}
                </select>
              </div>
              <div className="col-4 col-sm-2">
                <label htmlFor="rlA"></label>
                <input
                  value={rlTeamA}
                  onChange={(e) => setRlTeamA(e.target.value)}
                  id="rlA"
                  className="form-control my-2"
                  type="number"
                  placeholder="RL"
                />
              </div>
              <div className="col-4 col-sm-2">
                <label htmlFor="mlA"></label>
                <input
                  value={mlTeamA}
                  onChange={(e) => setMlTeamA(e.target.value)}
                  id="mlA"
                  className="form-control my-2"
                  type="number"
                  placeholder="ML"
                />
              </div>
              <div className="col-4 col-sm-2">
                <label htmlFor="up"></label>
                <input
                  value={up}
                  onChange={(e) => setUp(e.target.value)}
                  id="up"
                  className="form-control my-2"
                  type="number"
                  placeholder="Up"
                />
              </div>
              <div className="col-12 col-sm-6">
                <label htmlFor="teamB" className="form-label">
                  Equipo B
                </label>
                <select
                  value={teamB}
                  name="teamB"
                  id="teamB"
                  className="form-select"
                  onChange={(e) => setTeamB(e.target.value)}
                >
                  <option defaultValue></option>
                  {teams?.map((team) => {
                    return (
                      <option key={team.id} value={[team.name, team.urlImg]}>
                        {team.name}
                      </option>
                    );
                  })}
                </select>
              </div>
              <div className="col-4 col-sm-2">
                <label htmlFor="rlB"></label>
                <input
                  value={rlTeamB}
                  onChange={(e) => setRlTeamB(e.target.value)}
                  id="rlB"
                  className="form-control my-2"
                  type="number"
                  placeholder="RL"
                />
              </div>
              <div className="col-4 col-sm-2">
                <label htmlFor="mlB"></label>
                <input
                  value={mlTeamB}
                  onChange={(e) => setMlTeamB(e.target.value)}
                  id="mlB"
                  className="form-control my-2"
                  type="number"
                  placeholder="ML"
                />
              </div>
              <div className="col-4 col-sm-2">
                <label htmlFor="down"></label>
                <input
                  value={down}
                  onChange={(e) => setDown(e.target.value)}
                  id="down"
                  className="form-control my-2"
                  type="number"
                  placeholder="Down"
                />
              </div>
            </div>
          </div>
          <div className="card-footer">
            <button onClick={handlerSave} className="btn btn-secondary">
              Save
            </button>
          </div>
        </div>
      </div>
    </Fragment>
  );
};

export default Form;
