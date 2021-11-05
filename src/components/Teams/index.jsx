import { Fragment, useEffect, useState } from "react";
import { getData } from "../../Firebase";
import Item from "./Item";

export default function Teams(props) {
  const [teams, setTeams] = useState([]);

  useEffect(() => {
    getTeams();
  }, []);

  async function getTeams() {
    const response = await getData("teamsNfl");
    setTeams(response);
  }

  return (
    <Fragment>
      <div className="container">
        <div className="row">
          {teams?.map((doc) => (
            <div className="col-md-3 col-sm-6 my-2" key={doc?.id}>
              <Item value={doc}></Item>
            </div>
          ))}
        </div>
      </div>
    </Fragment>
  );
}
