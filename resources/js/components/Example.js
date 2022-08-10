import React, { useState ,useEffect} from "react";
import ReactDOM from 'react-dom';
import {
  BrowserRouter as Router,
  Routes,
  Route,
  Link,
  browserHistory     
} from "react-router-dom";
import Home from './Home';
import TextEditor from "./TextEditor";
import TextEditorView from "./TextEditorView";
function Example() {
    


    return (
        <Router>
        <br/><br/>
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header"><b>Laravel React Text Editor</b></div>

                        <div className="card-body">
                              

        <br/>
        <center>
        <Link to="/">Home page</Link>&nbsp;&nbsp;&nbsp;<Link to="/text-editor">Text editor</Link>
        <br/>
        </center>
        
        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <Routes>
          <Route element={<Home/>} path="/" />
          <Route element={<TextEditor/>} path="/text-editor" />
          <Route element={<TextEditorView/>} path="/text-editor/view/:id" />
        </Routes>
        </Router>        
    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
