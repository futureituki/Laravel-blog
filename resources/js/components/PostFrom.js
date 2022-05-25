import React from "react";
import { TextField,Button } from "@material-ui/core";
import { makeStyles, createStyles } from '@material-ui/core/styles';

const useStyles = makeStyles((theme)=>createStyles({
    textArea:{
        marginRight:theme.spacing(2),
    }
}))

const PostFrom = (props) => {
    const classes = useStyles();
    const {formData,inputChange,createPost} = props;
    return(
        <form>
            <TextField id="name" name="name" label="ラベル名" variant="outlined" className={classes.textArea} value={formData.name} onChange={inputChange}/>
            <TextField id="content" label="内容" variant="outlined" className={classes.textArea} name="content" value={formData.content} onChange={inputChange}/>
            <Button color="primary" variant="contained" onClick={createPost} href="/" >登録</Button>
        </form>
    )
}

export default PostFrom
