import React, { Fragment } from "react";
import Item from "./Item";

const Games = () => {
  const cards = [1, 2, 3, 4, 5, 6, 7, 8, 9];
  return (
    <Fragment>
      <div className="container">
        <div className="row">
          {cards?.map((card) => (
            <div className="col-md-4 col-sm-6 my-2" key={card}>
              <Item></Item>
            </div>
          ))}
        </div>
      </div>
    </Fragment>
  );
};

export default Games;
