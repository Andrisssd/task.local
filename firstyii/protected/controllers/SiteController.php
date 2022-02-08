<?php

class SiteController extends Controller
{
	public function actions()
	{
		return array(
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	public function actionIndex()
	{
		$model = new WorkerForm();
		if(isset($_POST['WorkerForm']))
		{
			$model->attributes=$_POST['WorkerForm'];
			if($model->AreInputsValid())
			{
				$model->GetResultStrings();
				$this->render("answer", array("model"=>$model));
				return;
			}

            $model->SetErrorProperties();
			$this->render('index', array("model"=>$model));
			return;
		}
		
		$this->render('index', array("model"=>$model));
	}
}