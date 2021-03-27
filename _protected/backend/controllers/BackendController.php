<?php
namespace backend\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;


class BackendController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                        // theCreator
                    [
                        'controllers' => ['course','group','direction','exam-answer','exam','exam-permission', 'exam-student',
                            'faculty', 'fan', 'final-work', 'group', 'kafedra', ' monitororing-check', 'monitoring',
                            'para', 'permission', 'room', 'student', 'studentprofile', 'teacher',
                            'time-table', 'university', 'user', 'exams', 'lang', 'monitoring-check','admin', 'library'
                        ],

                        'actions' => ['index','ajaxdirection', 'javoblar', 'update', 'view', 'create', 'exam-name', 'question', 'exams', 'groups',
                            'direction', 'group', 'student', 'edutype', 'faculty', 'check', 'timetable', 'create1', 'changedate',
                            'profile', 'update1',  'list','lists', 'darsjadval', 'exam', 'myattendance', 'onesubject', 'rating', 'checking',
                             'store',  'yopish','questionstore', 'ruxsat', 'ruxsat1', 'edit', 'questiondelete','result',  'spread',
                            'ajaxcourse', 'ajaxgroups', 'answer', 'teacher', 'reting', 'finalpdf', 'checkpost', 'deletes', 'answerstore',
                            'fetch','edu-type', 'del','teacher','student', 'permissionup','indexa', 'permission', 'delete','viewuser', 'student',  'stak', 'img', 'fan', 'mark', 'monitoring','ansgr', 'ansstd', 'export', 'fan','uploadfayl','stdnote', 'checkingpdf', 'pdf'

                        ],
                        'allow' => true,
                        'roles' => ['theCreator'],
                    ],

                    // Admin
                    [
                        'controllers' => ['course','group','direction','exam-answer','exam','exam-permission', 'exam-student',
                            'faculty', 'fan', 'final-work', 'group', 'kafedra', ' monitororing-check', 'monitoring',
                            'para', 'permission', 'room', 'student', 'studentprofile', 'teacher',
                            'time-table', 'user', 'exams', 'lang', 'monitoring-check', 'library'
                        ],
                        'actions' => ['index','ajaxdirection', 'update', 'view', 'create', 'exam-name', 'question', 'exams', 'groups',
                            'direction', 'group', 'student', 'edutype', 'faculty', 'check', 'timetable', 'create1', 'javoblar', 'changedate',
                            'profile', 'update1',  'list','lists', 'darsjadval', 'exam', 'myattendance', 'onesubject', 'rating', 'checking',
                             'store',  'yopish','questionstore', 'ruxsat', 'ruxsat1', 'edit', 'questiondelete','result',  'spread',
                            'ajaxcourse', 'ajaxgroups', 'answer', 'teacher', 'reting', 'finalpdf', 'checkpost', 'deletes', 'answerstore',
                            'fetch','edu-type', 'del','status','document', 'indexa', 'mark', 'checkpdf', 'permissionup', 'permission', 'delete','viewuser','ansgr', 'ansstd', 'export', 'results', 'fan','uploadfayl','stdnote', 'checkingpdf', 'pdf'
                        ],
                        'allow' => true,
                        'roles' => ['Admin'],
                    ],



                    // O`qituvchi
                    [
                        'controllers' => ['teacherprofile', 'exam-student', 'monitoring', 'document', 'library'],
                        'actions' => ['document','my','index','darsjadval','checking', 'exam', 'img', 'mydoc',   'reting','rating',  'check', 'checkpost', 'mygroups','examsub','checkpdf', 'examname', 'fan', 'uploadfayl', 'checkingpdf' ],

                        'allow' => true,
                        'roles' => ['Teacher'],
                    ],

                    // Tinglovchi
                    [
                        'controllers' => ['studentprofile' , 'document', 'library'],
                        'actions' => ['index','exam', 'darsjadval', 'myattendance', 'rating','onesubject', 'answerstore', 'fan'
                        ],
                        'allow' => true,
                        'roles' => ['Student'],
                    ],





                ], // rules

            ], // access

            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['GET'],
                ],
            ], // verbs

        ]; // return

    } // behaviors



} // BackendController
