// Normally this is not fully uppercase - but for some reason the URI filename is
Class MY_URI extends CI_URI
{


/**
 * Filter segments for malicious characters
 *
 * @access  private
 * @param   string
 * @return  string
 */
function _filter_uri($str)
{
    if ($str != '' && $this->config->item('permitted_uri_chars') != '' && $this->config->item('enable_query_strings') == FALSE)
    {
        if ( ! preg_match("|^[".str_replace(array('\\-', '\-'), '-', preg_quote($this->config->item('permitted_uri_chars'), '-'))."]+$|i", $str))
        {
            // DO SOMETHING HERE LIKE REDIRECT OR CHANGE THE URL
        }
    }

    // Convert programatic characters to entities
    $bad    = array('$',        '(',        ')',        '%28',      '%29');
    $good   = array('&#36;',    '&#40;',    '&#41;',    '&#40;',    '&#41;');

    return str_replace($bad, $good, $str);
}