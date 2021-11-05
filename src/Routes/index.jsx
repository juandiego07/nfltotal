import { BrowserRouter as Router, Switch, Route } from "react-router-dom";
import Header from "../components/Layout/Header";
import Register from "../components/Register";
import Teams from "../components/Teams";
import Games from "../components/Games";

export default function Routes(props) {
  return (
    <Router>
      <Header></Header>
      <Switch>
        <Route path="/games" component={Games} exact />
        <Route path="/Register/:id" component={Register} exact />
        <Route path="/Register/Create" component={Register} exact />
        <Route path="/teams" component={Teams} exact />
        <Route path="/" exact />
      </Switch>
    </Router>
  );
}
