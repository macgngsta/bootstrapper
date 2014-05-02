<?php
namespace Bootstrapper;

/**
 * Typography for creating Twitter Bootstrap typography elments.
 *
 * @category   HTML/UI
 * @package    Boostrapper
 * @subpackage Twitter
 * @author     Patrick Talmadge - <ptalmadge@gmail.com>
 * @author     Maxime Fabre - <ehtnam6@gmail.com>
 * @author     Marvin Schröder - <marvinschroeder85@gmail.com>
 * @license    MIT License <http://www.opensource.org/licenses/mit>
 * @link       http://laravelbootstrapper.phpfogapp.com/
 *
 * @see        http://twitter.github.com/bootstrap/
 */
class Typography
{

    /**
     * Typography types
     * @var constant
     */
    const LEAD    = 'lead';
    const MUTED   = 'text-muted';
    const WARNING = 'text-warning';
    const INFO    = 'text-info';
    const SUCCESS = 'text-success';
    const PRIMARY = 'text-primary';
    const DANGER  = 'text-danger';

    const LEFT_ALIGN    = 'text-left';
    const CENTER_ALIGN = 'text-center';
    const RIGHT_ALIGN = 'text-right';
    const JUSTIFY_ALIGN  = 'text-justify';

    const HEADING_1 = 'h1';
    const HEADING_2 = 'h2';
    const HEADING_3 = 'h3';
    const HEADING_4 = 'h4';
    const HEADING_5 = 'h5';
    const HEADING_6 = 'h6';

    /**
     * Create a new Typography.
     *
     * @param string $type       Type of Typography
     * @param string $message    Message in tag
     * @param array  $attributes Parent div attributes
     *
     * @return string Typography HTML
     */
    protected static function createEmphasis($type, $message, $tag = 'p', $attributes = array())
    {
        $attributes = Helpers::add_class($attributes, $type);

        return '<'.$tag.Helpers::getContainer('html')->attributes($attributes).'>'.$message.'</'.$tag.'>';
    }

    /**
     * Allow wrapping of some tags, such as <small>, or <strong>
    */
    protected static function createWrapper($message, $tag, $attributes=array())
    {
        return '<'.$tag.Helpers::getContainer('html')->attributes($attributes).'>'.$message.'</'.$tag.'>';
    }

    /** 
     * Wrap with header element
     *
     * @param string $message    Message in tag
     * @param array  $attributes Parent div attributes
     *
     * @return string Typography HTML
     */
    public static function heading($message, $tag=Typography::HEADING_1, $attributes=array())
    {
        return static::createWrapper($message, $tag, $attributes);
    }

    /** 
     * Wrap with strong
     *
     * @param string $message    Message in tag
     * @param array  $attributes Parent div attributes
     *
     * @return string Typography HTML
     */
    public static function strong($message, $tag='strong', $attributes=array())
    {
        return static::createWrapper($message, $tag, $attributes);
    }

    /** 
     * Wrap with small
     *
     * @param string $message    Message in tag
     * @param array  $attributes Parent div attributes
     *
     * @return string Typography HTML
     */
    public static function small($message, $tag='small', $attributes=array())
    {
        return static::createWrapper($message, $tag, $attributes);
    }

    /** 
     * Wrap with italics
     *
     * @param string $message    Message in tag
     * @param array  $attributes Parent div attributes
     *
     * @return string Typography HTML
     */
    public static function italics($message, $tag='em', $attributes=array())
    {
        return static::createWrapper($message, $tag, $attributes);
    }


    /**
     * Create a new left aligned
     *
     * @param string $message    Message in tag
     * @param array  $attributes Parent div attributes
     *
     * @return string Typography HTML
     */
    public static function left($message, $tag = 'p', $attributes = array())
    {
        return static::createEmphasis(Typography::LEFT_ALIGN, $message, $tag, $attributes);
    }

    /**
     * Create a new center aligned
     *
     * @param string $message    Message in tag
     * @param array  $attributes Parent div attributes
     *
     * @return string Typography HTML
     */
    public static function center($message, $tag = 'p', $attributes = array())
    {
        return static::createEmphasis(Typography::CENTER_ALIGN, $message, $tag, $attributes);
    }

    /**
     * Create a new right aligned
     *
     * @param string $message    Message in tag
     * @param array  $attributes Parent div attributes
     *
     * @return string Typography HTML
     */
    public static function right($message, $tag = 'p', $attributes = array())
    {
        return static::createEmphasis(Typography::RIGHT_ALIGN, $message, $tag, $attributes);
    }

    /**
     * Create a new justify aligned
     *
     * @param string $message    Message in tag
     * @param array  $attributes Parent div attributes
     *
     * @return string Typography HTML
     */
    public static function justify($message, $tag = 'p', $attributes = array())
    {
        return static::createEmphasis(Typography::JUSTIFY_ALIGN, $message, $tag, $attributes);
    }

    /**
     * Create a new lead text.
     *
     * @param string $message    Message in tag
     * @param array  $attributes Parent div attributes
     *
     * @return string Typography HTML
     */
    public static function lead($message, $tag = 'p', $attributes = array())
    {
        return static::createEmphasis(Typography::LEAD, $message, $tag, $attributes);
    }

    /**
     * Create a new muted text.
     *
     * @param string $message    Message in tag
     * @param array  $attributes Parent div attributes
     *
     * @return string Typography HTML
     */
    public static function muted($message, $tag = 'p', $attributes = array())
    {
        return static::createEmphasis(Typography::MUTED, $message, $tag, $attributes);
    }

    /**
     * Create a new warning text.
     *
     * @param string $message    Message in tag
     * @param array  $attributes Parent div attributes
     *
     * @return string Typography HTML
     */
    public static function warning($message, $tag = 'p', $attributes = array())
    {
        return static::createEmphasis(Typography::WARNING, $message, $tag, $attributes);
    }

    /**
     * Create a new error text.
     *
     * @param string $message    Message in tag
     * @param array  $attributes Parent div attributes
     *
     * @return string Typography HTML
     */
    public static function error($message, $tag = 'p', $attributes = array())
    {
        return static::createEmphasis(Typography::DANGER, $message, $tag, $attributes);
    }

    /**
     * Create a new danger text.
     *
     * @param string $message    Message in tag
     * @param array  $attributes Parent div attributes
     *
     * @return string Typography HTML
     */
    public static function danger($message, $tag = 'p', $attributes = array())
    {
        return static::createEmphasis(Typography::DANGER, $message, $tag, $attributes);
    }

    /**
     * Create a new info text.
     *
     * @param string $message    Message in tag
     * @param array  $attributes Parent div attributes
     *
     * @return string Typography HTML
     */
    public static function info($message, $tag = 'p', $attributes = array())
    {
        return static::createEmphasis(Typography::INFO, $message, $tag, $attributes);
    }

    /**
     * Create a new success text.
     *
     * @param string $message    Message in tag
     * @param array  $attributes Parent div attributes
     *
     * @return string Typography HTML
     */
    public static function success($message, $tag = 'p', $attributes = array())
    {
        return static::createEmphasis(Typography::SUCCESS, $message, $tag, $attributes);
    }

    /**
     * Create a new primary text.
     *
     * @param string $message    Message in tag
     * @param array  $attributes Parent div attributes
     *
     * @return string Typography HTML
     */
    public static function primary($message, $tag = 'p', $attributes = array())
    {
        return static::createEmphasis(Typography::PRIMARY, $message, $tag, $attributes);
    }

    /**
     * Creates a definition list
     *
     * @param array $list       An array [term => description]
     * @param array $attributes An array of attributes
     *
     * @return string A formatted <dl> list
     */
    public static function dl($list, $attributes = array())
    {
        $dl = null;

        // Check if the list contains anything
        if (count($list) == 0) {
            return false;
        }

        // Write each entry
        foreach ($list as $term => $description) {
            $dl .= '<dt>'.Helpers::getContainer('html')->entities($term).'</dt>';
            $dl .= '<dd>'.Helpers::getContainer('html')->entities($description).'</dd>';
        }

        return '<dl'.Helpers::getContainer('html')->attributes($attributes).'>'.$dl.'</dl>';
    }

    /**
     * Creates an horizontal definition list
     *
     * @param array $list       An array [term => description]
     * @param array $attributes An array of attributes
     *
     * @return string A formatted <dl> list
     */
    public static function horizontal_dl($list, $attributes = array())
    {
        $attributes = Helpers::add_class($attributes, 'dl-horizontal');

        return static::dl($list, $attributes);
    }
}
