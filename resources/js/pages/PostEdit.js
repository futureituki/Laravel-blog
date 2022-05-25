import React from "react";
import { Card } from "@material-ui/core";
import { createStyles ,makeStyles} from "@material-ui/core/styles";
import PostFrom from "../components/PostFrom";
import { useState } from "react";
import { useEffect } from "react";
import axios from "axios";

const useStyles = makeStyles((theme) => createStyles({
    card: {
        margin: theme.spacing(5),
        padding: theme.spacing(3),
    },
}));

const PostEdit = (props) => {
    const classes = useStyles();

    const params = props.match.params;

    const [editData,setEditData] = useState({name:"",content:""});

    useEffect(()=>{
        getEditData();
    },[])

    const getEditData = () => {
        axios.post('/api/edit',{
            id:params.id
        }).then(res=>{
            setEditData(res.data)
        }).catch((err)=>{
            console.log(err);
        })
    }
    const updatePost = () => {
        if(editData===""){
            return
        }
        axios.post('/api/update',{
            id:params.id,
            name:editData.name,
            content:editData.content,
        }).then(res=>{
            setEditData(res.data)
        }).catch(err=>{
            console.log(err);
        })
    }
    function inputChange(e){
        const key = e.target.name;
        const value = e.target.value;
        editData[key] = value;
        let data = Object.assign({}, editData);
        setEditData(data);
    }
    return(
        <div className="container">
        <div className="row justify-content-center">
            <div className="col-md-8">
                <div className="card">
                    <h1>タスク編集</h1>
                    <Card className={classes.card}>
                        <PostFrom data={editData}  inputChange={inputChange} btnFunc={updatePost}/>
                    </Card>
                </div>
            </div>
        </div>
    </div>
    )
}

export default PostEdit