<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>GTD Tools</title>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/task03.css">
</head>
<body>
	<div class="header">
		<h1>Tools</h1>
	</div>
	<div id="main">
		<div class="left">
			
				<div id="allTasks" cateid="-1" class="list-title all-tasks active" onclick="clickCate(this)">所有任务(<span>7</span>)</div>
			
				
				<div class="list-title">分类列表</div>
				<div id="listcontent" class="list">
                    <ul>
                        <li>
                            <h2 class="active"><i class="fa fa-folder-open"></i><span>百度IFE项目</span> (2)<i class="fa fa-trash-o"></i>
                            </h2>
                            <ul>
                                <li>
                                    <h3><i class="fa fa-file-o"></i><span>task1</span> (2)<i class="fa fa-trash-o"></i></h3>
                                </li>
                                <li>
                                    <h3 class="active"><i class="fa fa-file-o"></i><span>task2</span> (2)<i class="fa fa-trash-o"></i></h3>
                                </li>
                            </ul>
                        </li>
                        <li><h2><i class="fa fa-folder-open"></i><span>默认分类</span> (0)<i class="fa fa-trash-o"></i></h2></li>
                    </ul>
                </div>
                <button class="add" onclick="clickAddCate()"><i class="fa fa-plus"></i>新增分类</button>
            </div>
				<!--<div id="catalog-wrap">
					<div id="default-catalog">
						<div class="catalog-name">
							<span>默认分类</span>(<span>1</span>)
						</div>
					</div>
				</div>
			</div>
			<div class="add-catalog">新增分类</div>
		</div>
		-->
		<div class="mid">
			<div class="status">
				<button id="all-tasks" class="active">所有</button>
				<button id="unfinish-tasks">未完成</button>
				<button id="finished-tasks">已完成</button>
			</div>
			<!--
				<div class="todo-wrap"></div>
				<div class="add-task add">新增任务</div>
		</div>
		<div id="catalog-task-right">
			<div class="task-title">
				<div class="todo-name">任务标题</div>
				<div class="manipulate">
					<img id="btn-ok" src="img/unfinished.png" alt="finish"/>
					
			        <img id="btn-edit" src="img/edit.png" alt="edit"/>
			        
			        <img id="btn-save" src="img/ok.png" alt="save"/>
			        
			        <img id="btn-cancel" src="img/cancel.png" alt="cancel"/>
			        
			        <span id="tip"></span>
				</div>
				
			</div>
			<div class="task-date">任务日期：<span>2016-2-1</span></div>
			<div class="content"></div>
			-->
			<!--
				<div class="title">
				<div class="todo-name"><input type="text" class="input-title" placeholder="请输入标题"></div>
				<div class="manipulate"></div>
				</div>
				<div class="task-date">任务日期：<span><input type="date" class="input-date"></span></div>
				<div class="content">
					<textarea class="textarea-content" placeholder="请输入内容"></textarea>
				</div>
			-->
			<div id="task-list" class="task-list">
                    <div>2015-06-05</div>
                    <ul>
                        <li taskid="1" class="active">todo-1</li>
                        <li taskid="2">todo-2</li>
                    </ul>
                    <div>2015-06-05</div>
                    <ul>
                        <li>todo-1</li>
                        <li>todo-2</li>
                    </ul>
                </div>
                <button class="add-task add" onclick="clickAddTask()"><i class="fa fa-plus"></i>新增任务</button>
            </div>
            <div class="right">
                <div class="title">
                    <div class="todo-name">todo-1</div>
                    <div class="manipulate">
                        <a><i class="fa fa-check-square-o"></i></a>
                        <a><i class="fa fa-pencil-square-o"></i></a>
                    </div>
                </div>
                <div class="task-date">
                    任务日期：<span>2015-06-05</span>
                </div>
                <div class="content">
                    finish task 3啊啊啊啊啊这个是假的
                </div>
			<div class="button-area">
			<!--
				<span class="info"></span>
				<button class="save">保存</button>
				<button class="cancel-save">放弃</button>
				-->
			</div>

		</div>
	</div>
	<div class="cover">
		<div class="modal">
			<div class="modal-head">
				新增分类
			</div>
			<div class="modal-body">
				选择主分类:<select id="modal-select">
					<option value="volvo">volvo</option>
				</select><br>
				新分类名称:<input id="newCateName" type="text">
			</div>
			<div class="modal-foot">
				<button onclick="ok()">确认</button>
				<button onclick="cancel()">取消</button>
			</div>
		</div>
	</div>
	
	<script src="js/util.js"></script>
	<script src="js/todo.js"></script>
</body>
</html>