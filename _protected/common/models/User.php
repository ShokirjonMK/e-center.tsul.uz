<?php
namespace common\models;

use common\rbac\models\Role;
use nenad\passwordStrength\StrengthValidator;
use yii\behaviors\TimestampBehavior;
use Yii;

/**
 * This is the user model class extending UserIdentity.
 * Here you can implement your custom user solutions.
 *
 * @property $role Role
 */
class User extends UserIdentity
{
    const STATUS_DELETED = 0;
    const STATUS_NOT_ACTIVE = 1;
    const STATUS_ACTIVE = 10;

    public $university;
    public $password;
    public $rasm;

    public $finance_type;
    public $group_id;
    public $status;

    public $fakultet;
    public $yunalish;
    public $kafedra_id;
    public $degree_id;

    /**
     * @var \common\rbac\models\Role
     */
    public $item_name;

    /**
     * Returns the validation rules for attributes.
     *
     * @return array
     */
    public function rules()
    {
        return [
            [['username'], 'filter', 'filter' => 'trim'],
            [[ 'full_name'], 'required'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            [['status', 'uni_id'], 'integer'],
            [['degree_id','image','university', 'device_id',  'full_name', 'birth_date', 'address','number','passport_number','gender', 'image','address','role_id'],'string', 'max' => 255],
            [['passport_number', 'kafedra_id'],'string', 'max' => 9],
            [['fakultet','yunalish','group_id','finance_type'],'string', 'max' => 255],
            ['rasm', 'file', 'extensions' => ['jpg', 'png', 'jpeg']],
            ['password', 'required', 'on' => 'create'],
            $this->passwordStrengthRule(),
            ['username', 'unique', 'message' => 'This username has already been taken.'],

        ];
    }

    /**
     * Set password rule based on our setting value (Force Strong Password).
     *
     * @return array Password strength rule.
     */
    private function passwordStrengthRule()
    {
        // get setting value for 'Force Strong Password'
        $fsp = Yii::$app->params['fsp'];

        // password strength rule is determined by StrengthValidator
        // presets are located in: vendor/nenad/yii2-password-strength/presets.php
        $strong = [['password'], StrengthValidator::className(), 'preset'=>'normal'];

        // normal yii rule
        $normal = ['password', 'string', 'min' => 6];

        // if 'Force Strong Password' is set to 'true' use $strong rule, else use $normal rule
        return ($fsp) ? $strong : $normal;
    }

    /**
     * Returns a list of behaviors that this component should behave as.
     *
     * @return array
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * Returns the attribute labels.
     *
     * @return array
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'full_name' => Yii::t('appi', 'Ism Familiyasi Otasining ismi'),
            'username' => Yii::t('app', 'Login'),
            'password' => Yii::t('app', 'Parol'),
            'gender' => Yii::t('app', 'Jinsi'),
            'passport_number' => Yii::t('app', 'Pasport seriya va raqami'),
            'number' => Yii::t('app', 'Telefon raqami'),
            'finance_type' => Yii::t('app', 'Ta`lim turi'),
//            'email' => Yii::t('app', 'Email'),
            'status' => Yii::t('app', 'Holati'),
            'birth_date' => Yii::t('app', 'Tu`gilgan yili'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
//            'item_name' => Yii::t('app', 'Role'),
            'image' => Yii::t('app', 'Image')
        ];
    }

    /**
     * Relation with Role model.
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRole()
    {
        // User has_one Role via Role.user_id -> id
        return $this->hasOne(Role::className(), ['user_id' => 'id']);
    }

//------------------------------------------------------------------------------------------------//
// USER FINDERS
//------------------------------------------------------------------------------------------------//

    /**
     * Finds user by username.
     *
     * @param  string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status' => User::STATUS_ACTIVE]);
    }

    /**
     * Finds user by email.
     *
     * @param  string $email
     * @return static|null
     */
    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email, 'status' => User::STATUS_ACTIVE]);
    }

    /**
     * Finds user by password reset token.
     *
     * @param  string $token Password reset token.
     * @return null|static
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token))
        {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => User::STATUS_ACTIVE,
        ]);
    }

    /**
     * Finds user by account activation token.
     *
     * @param  string $token Account activation token.
     * @return static|null
     */
    public static function findByAccountActivationToken($token)
    {
        return static::findOne([
            'account_activation_token' => $token,
            'status' => User::STATUS_NOT_ACTIVE,
        ]);
    }

    /**
     * Checks to see if the given user exists in our database.
     * If LoginForm stream_socket_enable_crypto(stream, enable)rio is set to lwe (login with email), we need to check
     * user's email and password combo, otherwise we check username/password.
     * NOTE: used in LoginForm model.
     *
//     * @param  string $username Can be either username or email based on scenario.
//     * @param  string $password
//     * @param  string $scenario
//     * @return bool|static
//     */
//    public static function userExists($username, $password, $scenario)
//    {
//        // if scenario is 'lwe', we need to check email, otherwise we check username
//        $field = ($scenario === 'lwe') ? 'email' : 'username';
//
//        if ($user = static::findOne([$field => $username]))
//        {
//            if ($user->validatePassword($password))
//            {
//                return $user;
//            }
//            else
//            {
//                return false; // invalid password
//            }
//        }
//        else
//        {
//            return false; // invalid username|email
//        }
//    }

//------------------------------------------------------------------------------------------------//
// HELPERS
//------------------------------------------------------------------------------------------------//

    /**
     * Returns the user status in nice format.
     *
     * @param  null|integer $status Status integer value if sent to method.
     * @return string               Nicely formatted status.
     */
    public function getStatusName($status = null)
    {
        $status = (empty($status)) ? $this->status : $status ;

        if ($status === self::STATUS_DELETED)
        {
            return "Deleted";
        }
        elseif ($status === self::STATUS_NOT_ACTIVE)
        {
            return "Inactive";
        }
        else
        {
            return "Active";
        }
    }

    /**
     * Returns the array of possible user status values.
     *
     * @return array
     */
    public function getStatusList()
    {
        $statusArray = [
            self::STATUS_ACTIVE     => 'Active',
            self::STATUS_NOT_ACTIVE => 'Inactive',
            self::STATUS_DELETED    => 'Deleted'
        ];

        return $statusArray;
    }

    /**
     * Returns the role name ( item_name )
     *
     * @return string
     */
    public function getRoleName()
    {
        return $this->role->item_name;
    }

    /**
     * Generates new password reset token.
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token.
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }

    /**
     * Finds out if password reset token is valid.
     *
     * @param  string $token Password reset token.
     * @return bool
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token))
        {
            return false;
        }

        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    /**
     * Generates new account activation token.
     */
    public function generateAccountActivationToken()
    {
        $this->account_activation_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes account activation token.
     */
    public function removeAccountActivationToken()
    {
        $this->account_activation_token = null;
    }

    public function getUser_profile()
    {
        return $this->hasOne(\common\models\UserProfile::className(), ['user_id' => 'id']);
    }

    // public function getFirst() {
    //     return $this->user_profile->first;
    // }

    // public function getLast() {
    //     return $this->user_profile->last;
    // }

    // public function getAddress() {
    //     return $this->user_profile->address;
    // }

    // public function getDescription() {
    //     return $this->user_profile->description;
    // }

    // public function getPhone() {
    //     return $this->user_profile->phone;
    // }

    public function afterDelete(){
        if($this->image) {
            if(file_exists(\Yii::getAlias('@uploads').'/user/'.$this->image))
                unlink(\Yii::getAlias('@uploads').'/user/'.$this->image); // ?????????????? ?????? ????????
        }

        return parent::beforeDelete();
    }
}