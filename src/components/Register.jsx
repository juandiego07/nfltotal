import { Fragment, useEffect, useState } from "react";
import { useParams } from "react-router";
import { getDocument, saveData, updateDocument } from "../Firebase";

export default function Register(props) {
  const params = useParams();
  const [name, setName] = useState(""); 
  const [conference, setConference] = useState(""); 
  const [urlImg, setUrlImg] = useState(""); 

  useEffect(() => {
    if (params?.id !== "Create") {
      getDoc(params?.id);
    }
  }, [params?.id]);

  const getDoc = async (id) => {
    const response = await getDocument(id, "teamsNfl");
    setName(response?.name);
    setConference(response?.conference);
    setUrlImg(response?.urlImg);
    return response;
  };

  const handlerSaveData = async (e) => {
    e.preventDefault();
    const data = {
      name,
      conference,
      urlImg,
    };
    const response = await saveData("teamsNfl", data);
    return response;
  };

  async function handlerUpdate(e) {
    e.preventDefault();
    const data = {
      name,
      conference,
      urlImg,
    };
    const response = await updateDocument(params?.id, "teamsNfl", data);
    console.log(response);
  }

  return (
    <Fragment>
      <div className="d-flex justify-content-center mt-2">
        <div className="card col-12 col-sm-12 col-md-6">
          <div className="card-header">
            <h3>Registar Equipo</h3>
          </div>
          <div className="card-body">
            <input
              className="form-control my-2"
              placeholder="Nombre completo"
              value={name}
              onChange={(e) => setName(e.target.value)}
              id="nombre"
            />
            <input
              className="form-control my-2"
              placeholder="Division"
              value={conference}
              onChange={(e) => setConference(e.target.value)}
              id="division"
            />
            <input
              className="form-control my-2"
              placeholder="Url logo"
              value={urlImg}
              onChange={(e) => setUrlImg(e.target.value)}
              id="urlImg"
            />
          </div>
          <div className="card-footer">
            <input
              className="btn btn-secondary px-5 mx-1"
              type="submit"
              value="Save"
              onClick={handlerSaveData}
            />
            <input
              className="btn btn-secondary px-5 mx-1"
              type="submit"
              value="Update"
              onClick={handlerUpdate}
            />
          </div>
        </div>
      </div>
    </Fragment>
  );
}
