import React from "react";
import ReactDOM from "react-dom";
import "./assets/styles/style.css";
import "./assets/styles/style.scss";
import {sum, operators} from "./sum";
import {mul} from "./mul";

const a = 11;
const b = 1;
const JSONSpace = 2;

ReactDOM.render(
    <div>привет, мир!!3
        {
            sum(a, b)
        }
        {
            mul(a, b)
        }
        <div className={"heh"}>text ой тестовый текст</div>
        <code>
            {
                JSON.stringify(operators, null, JSONSpace)
            }
        </code>
    </div>,
    document.getElementById("root")
);