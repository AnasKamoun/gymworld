<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* registration/confirmation_email.html.twig */
class __TwigTemplate_51923dc8bd27feae773ce58ec238c809 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/confirmation_email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/confirmation_email.html.twig"));

        // line 12
        yield "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\"
        \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html dir=\"ltr\" lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
    <meta name=\"x-apple-disable-message-reformatting\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"telephone=no\" name=\"format-detection\">
    <title>New email template 2024-05-01</title><!--[if (mso 16)]>
    <style type=\"text/css\">
        a {
            text-decoration: none;
        }
    </style>
    <![endif]--><!--[if gte mso 9]>
    <style>sup {
        font-size: 100% !important;
    }</style><![endif]--><!--[if gte mso 9]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG></o:AllowPNG>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]--><!--[if !mso]><!-- -->
    <link rel=\"stylesheet\"
          href=\"https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i\">
    <!--<![endif]-->
    <style type=\"text/css\">
        .rollover:hover .rollover-first {
            max-height: 0px !important;
            display: none !important;
        }

        .rollover:hover .rollover-second {
            max-height: none !important;
            display: block !important;
        }

        .rollover span {
            font-size: 0px;
        }

        u + .body img ~ div div {
            display: none;
        }

        #outlook a {
            padding: 0;
        }

        span.MsoHyperlink,
        span.MsoHyperlinkFollowed {
            color: inherit;
            mso-style-priority: 99;
        }

        a.es-button {
            mso-style-priority: 100 !important;
            text-decoration: none !important;
        }

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        .es-desk-hidden {
            display: none;
            float: left;
            overflow: hidden;
            width: 0;
            max-height: 0;
            line-height: 0;
            mso-hide: all;
        }

        .es-button-border:hover > a.es-button {
            color: #ffffff !important;
        }

        @media only screen and (max-width: 600px) {
            .es-m-p0r {
                padding-right: 0px !important
            }

            .es-m-p20b {
                padding-bottom: 20px !important
            }

            .es-m-p0l {
                padding-left: 0px !important
            }

            .es-m-p20t {
                padding-top: 20px !important
            }

            .es-m-p30r {
                padding-right: 30px !important
            }

            .es-m-p30l {
                padding-left: 30px !important
            }

            *[class=\"gmail-fix\"] {
                display: none !important
            }

            p, a {
                line-height: 150% !important
            }

            h1, h1 a {
                line-height: 120% !important
            }

            h2, h2 a {
                line-height: 120% !important
            }

            h3, h3 a {
                line-height: 120% !important
            }

            h4, h4 a {
                line-height: 120% !important
            }

            h5, h5 a {
                line-height: 120% !important
            }

            h6, h6 a {
                line-height: 120% !important
            }

            h1 {
                font-size: 30px !important;
                text-align: left
            }

            h2 {
                font-size: 24px !important;
                text-align: left
            }

            h3 {
                font-size: 20px !important;
                text-align: left
            }

            h4 {
                font-size: 24px !important;
                text-align: left
            }

            h5 {
                font-size: 20px !important;
                text-align: left
            }

            h6 {
                font-size: 16px !important;
                text-align: left
            }

            .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a {
                font-size: 30px !important
            }

            .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a {
                font-size: 24px !important
            }

            .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a {
                font-size: 20px !important
            }

            .es-header-body h4 a, .es-content-body h4 a, .es-footer-body h4 a {
                font-size: 24px !important
            }

            .es-header-body h5 a, .es-content-body h5 a, .es-footer-body h5 a {
                font-size: 20px !important
            }

            .es-header-body h6 a, .es-content-body h6 a, .es-footer-body h6 a {
                font-size: 16px !important
            }

            .es-menu td a {
                font-size: 14px !important
            }

            .es-header-body p, .es-header-body a {
                font-size: 14px !important
            }

            .es-content-body p, .es-content-body a {
                font-size: 14px !important
            }

            .es-footer-body p, .es-footer-body a {
                font-size: 14px !important
            }

            .es-infoblock p, .es-infoblock a {
                font-size: 12px !important
            }

            .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3, .es-m-txt-c h4, .es-m-txt-c h5, .es-m-txt-c h6 {
                text-align: center !important
            }

            .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3, .es-m-txt-r h4, .es-m-txt-r h5, .es-m-txt-r h6 {
                text-align: right !important
            }

            .es-m-txt-j, .es-m-txt-j h1, .es-m-txt-j h2, .es-m-txt-j h3, .es-m-txt-j h4, .es-m-txt-j h5, .es-m-txt-j h6 {
                text-align: justify !important
            }

            .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3, .es-m-txt-l h4, .es-m-txt-l h5, .es-m-txt-l h6 {
                text-align: left !important
            }

            .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img {
                display: inline !important
            }

            .es-m-txt-r .rollover:hover .rollover-second, .es-m-txt-c .rollover:hover .rollover-second, .es-m-txt-l .rollover:hover .rollover-second {
                display: inline !important
            }

            .es-m-txt-r .rollover span, .es-m-txt-c .rollover span, .es-m-txt-l .rollover span {
                line-height: 0 !important;
                font-size: 0 !important
            }

            .es-spacer {
                display: inline-table
            }

            a.es-button, button.es-button {
                font-size: 18px !important;
                line-height: 120% !important
            }

            a.es-button, button.es-button, .es-button-border {
                display: inline-block !important
            }

            .es-m-fw, .es-m-fw.es-fw, .es-m-fw .es-button {
                display: block !important
            }

            .es-m-il, .es-m-il .es-button, .es-social, .es-social td, .es-menu {
                display: inline-block !important
            }

            .es-adaptive table, .es-left, .es-right {
                width: 100% !important
            }

            .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header {
                width: 100% !important;
                max-width: 600px !important
            }

            .adapt-img {
                width: 100% !important;
                height: auto !important
            }

            .es-mobile-hidden, .es-hidden {
                display: none !important
            }

            .es-desk-hidden {
                width: auto !important;
                overflow: visible !important;
                float: none !important;
                max-height: inherit !important;
                line-height: inherit !important
            }

            tr.es-desk-hidden {
                display: table-row !important
            }

            table.es-desk-hidden {
                display: table !important
            }

            td.es-desk-menu-hidden {
                display: table-cell !important
            }

            .es-menu td {
                width: 1% !important
            }

            table.es-table-not-adapt, .esd-block-html table {
                width: auto !important
            }

            .es-social td {
                padding-bottom: 10px
            }

            .h-auto {
                height: auto !important
            }
        }

        @media screen and (max-width: 384px) {
            .mail-message-content {
                width: 414px !important
            }
        }
    </style>
</head>
<body class=\"body\" style=\"width:100%;height:100%;padding:0;Margin:0\">
<div dir=\"ltr\" class=\"es-wrapper-color\" lang=\"en\" style=\"background-color:#EDEDED\">
    <!--[if gte mso 9]>
    <v:background xmlns:v=\"urn:schemas-microsoft-com:vml\" fill=\"t\">
        <v:fill type=\"tile\" color=\"#EDEDED\"></v:fill>
    </v:background>
    <![endif]-->
    <table class=\"es-wrapper\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" role=\"none\"
           style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;background-color:#EDEDED\">
        <tr>
            <td valign=\"top\" style=\"padding:0;Margin:0\">
                <table class=\"es-header\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"
                       role=\"none\"
                       style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:100%;table-layout:fixed !important;background-color:transparent;background-repeat:repeat;background-position:center top\">
                    <tr>
                        <td align=\"center\" style=\"padding:0;Margin:0\">
                            <table class=\"es-header-body\" cellspacing=\"0\" cellpadding=\"0\"
                                   bgcolor=\"#ffffff\" align=\"center\" role=\"none\"
                                   style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#2C2C2C;width:600px\">
                                <tr>
                                    <td align=\"left\" style=\"padding:30px;Margin:0\">
                                        <table cellspacing=\"0\" cellpadding=\"0\"
                                               width=\"100%\" role=\"none\"
                                               style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                            <tr>
                                                <td class=\"es-m-p0r\" valign=\"top\"
                                                    align=\"center\"
                                                    style=\"padding:0;Margin:0;width:540px\">
                                                    <table width=\"100%\" cellspacing=\"0\"
                                                           cellpadding=\"0\"
                                                           role=\"presentation\"
                                                           style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                                        <tr>
                                                            <td align=\"left\"
                                                                style=\"padding:0;Margin:0\">
                                                                <h1 style=\"Margin:0;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;mso-line-height-rule:exactly;letter-spacing:0;font-size:30px;font-style:normal;font-weight:normal;line-height:36px;color:#e46e0d\"
                                                                    align=\"center\">
                                                                    <strong>Power Gym&nbsp;</strong>
                                                                </h1></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table class=\"es-content\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"
                       role=\"none\"
                       style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:100%;table-layout:fixed !important\">
                    <tr>
                        <td align=\"center\" style=\"padding:0;Margin:0\">
                            <table class=\"es-content-body\" cellspacing=\"0\" cellpadding=\"0\"
                                   bgcolor=\"#ffffff\" align=\"center\" role=\"none\"
                                   style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px\">
                                <tr>
                                    <td align=\"left\" style=\"padding:0;Margin:0\">
                                        <table width=\"100%\" cellspacing=\"0\"
                                               cellpadding=\"0\" role=\"none\"
                                               style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                            <tr>
                                                <td class=\"es-m-p0r es-m-p20b\"
                                                    valign=\"top\" align=\"center\"
                                                    style=\"padding:0;Margin:0;width:600px\">
                                                    <table width=\"100%\" cellspacing=\"0\"
                                                           cellpadding=\"0\"
                                                           role=\"presentation\"
                                                           style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                                        <tr>
                                                            <td align=\"center\"
                                                                style=\"padding:0;Margin:0;font-size:0px\">
                                                                <a target=\"_blank\"
                                                                   href=\"https://viewstripo.email\"
                                                                   style=\"mso-line-height-rule:exactly;text-decoration:underline;color:#2C2C2C;font-size:14px\"><img
                                                                            class=\"adapt-img\"
                                                                            src=\"https://fhnnvrs.stripocdn.email/content/guids/CABINET_5f6622e7e5cd032fdf683e0242607800984156d8420a3bda259a1a9c943308fd/images/g560202075f68584426169936352fa7bf046d7b9cf7f3d03b9d62abb797731ed8e57931fcdadc211dad33d49776d9fe8d_640.jpeg\"
                                                                            alt=\"Payment Details Update Required\"
                                                                            style=\"display:block;font-size:14px;border:0;outline:none;text-decoration:none\"
                                                                            width=\"600\"
                                                                            title=\"Payment Details Update Required\"></a>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td align=\"left\"
                                        style=\"Margin:0;padding-top:30px;padding-right:30px;padding-bottom:40px;padding-left:30px\">
                                        <table cellpadding=\"0\" cellspacing=\"0\"
                                               width=\"100%\" role=\"none\"
                                               style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                            <tr>
                                                <td align=\"center\" valign=\"top\"
                                                    style=\"padding:0;Margin:0;width:540px\">
                                                    <table cellpadding=\"0\" cellspacing=\"0\"
                                                           width=\"100%\"
                                                           role=\"presentation\"
                                                           style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                                        <tr>
                                                            <td align=\"center\"
                                                                style=\"padding:0;Margin:0\">
                                                                <p style=\"Margin:0;mso-line-height-rule:exactly;font-family:Lexend, Arial, sans-serif;line-height:18px;letter-spacing:0;color:#ff4a4a;font-size:12px\">
                                                                    <strong>​</strong></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align=\"center\"
                                                                style=\"padding:0;Margin:0;padding-top:20px;padding-bottom:30px\">
                                                                <h1 style=\"Margin:0;font-family:Montaga, Arial, serif;mso-line-height-rule:exactly;letter-spacing:0;font-size:30px;font-style:normal;font-weight:normal;line-height:36px;color:#2C2C2C\">
                                                                    Welcome</h1></td>
                                                        </tr>
                                                        <tr>
                                                            <td align=\"left\"
                                                                style=\"padding:0;Margin:0;padding-bottom:30px\">
                                                                <p style=\"Margin:0;mso-line-height-rule:exactly;font-family:Lexend, Arial, sans-serif;line-height:21px;letter-spacing:0;color:#2C2C2C;font-size:14px\">
                                                                    Welcome to our
                                                                    community ! &nbsp;We're
                                                                    thrilled to have you
                                                                    here and can't wait
                                                                    for you to start
                                                                    exploring. We believe
                                                                    you'll find great
                                                                    value and make
                                                                    meaningful connections
                                                                    here. &nbsp;Before you
                                                                    get started, there's
                                                                    just one small step
                                                                    left. We need to
                                                                    confirm your email
                                                                    address to ensure that
                                                                    you receive all future
                                                                    updates from us. It
                                                                    also helps us keep our
                                                                    community safe and
                                                                    secure. &nbsp;Please
                                                                    click the link in the
                                                                    email we just sent you
                                                                    to verify your
                                                                    account. If you can't
                                                                    find the email, check
                                                                    your spam folder or
                                                                    request a new
                                                                    verification email.
                                                                    &nbsp;Thank you for
                                                                    joining us, and
                                                                    welcome aboard!
                                                                    &nbsp;</p>
                                                                <p style=\"Margin:0;mso-line-height-rule:exactly;font-family:Lexend, Arial, sans-serif;line-height:21px;letter-spacing:0;color:#2C2C2C;font-size:14px\">
                                                                    Best, Power Gym</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align=\"center\"
                                                                style=\"padding:0;Margin:0\">
                                                                <!--[if mso]><a
                                                                        href=\"undefined\"
                                                                        target=\"_blank\"
                                                                        hidden>
                                                                    <v:roundrect
                                                                            xmlns:v=\"urn:schemas-microsoft-com:vml\"
                                                                            xmlns:w=\"urn:schemas-microsoft-com:office:word\"
                                                                            esdevVmlButton
                                                                            href=\"undefined\"
                                                                            style=\"height:41px; v-text-anchor:middle; width:156px\"
                                                                            arcsize=\"50%\"
                                                                            stroke=\"f\"
                                                                            fillcolor=\"#d75a1c\">
                                                                        <w:anchorlock></w:anchorlock>
                                                                        <center style='color:#ffffff; font-family:Lexend, Arial, sans-serif; font-size:15px; font-weight:400; line-height:15px;  mso-text-raise:1px'>
                                                                            Verify Email
                                                                        </center>
                                                                    </v:roundrect>
                                                                </a>
                                                                <![endif]--><!--[if
                                                                !mso]><!-- --><span
                                                                        class=\"es-button-border msohide\"
                                                                        style=\"border-style:solid;border-color:#2CB543;background:#d75a1c;border-width:0px;display:inline-block;border-radius:30px;width:auto;mso-hide:all\"><a
                                                                            class=\"es-button\"
                                                                            target=\"_blank\"
                                                                            style=\"mso-style-priority:100 !important;text-decoration:none !important;mso-line-height-rule:exactly;color:#FFFFFF;font-size:18px;padding:10px 30px 10px 30px;display:inline-block;background:#d75a1c;border-radius:30px;font-family:Lexend, Arial, sans-serif;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center;letter-spacing:0;mso-padding-alt:0;mso-border-alt:10px solid #d75a1c\"
                                                                            href=\"";
        // line 527
        yield (isset($context["signedUrl"]) || array_key_exists("signedUrl", $context) ? $context["signedUrl"] : (function () { throw new RuntimeError('Variable "signedUrl" does not exist.', 527, $this->source); })());
        yield "\">

                                                                        Verify Email</a></span>
                                                                <!--<![endif]--></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                This link will expire
                in ";
        // line 543
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["expiresAtMessageKey"]) || array_key_exists("expiresAtMessageKey", $context) ? $context["expiresAtMessageKey"] : (function () { throw new RuntimeError('Variable "expiresAtMessageKey" does not exist.', 543, $this->source); })()), (isset($context["expiresAtMessageData"]) || array_key_exists("expiresAtMessageData", $context) ? $context["expiresAtMessageData"] : (function () { throw new RuntimeError('Variable "expiresAtMessageData" does not exist.', 543, $this->source); })()), "VerifyEmailBundle"), "html", null, true);
        yield "
                .
                <table cellpadding=\"0\" cellspacing=\"0\" class=\"es-content\" align=\"center\"
                       role=\"none\"
                       style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:100%;table-layout:fixed !important\">
                    <tr>
                        <td align=\"center\" style=\"padding:0;Margin:0\">
                            <table bgcolor=\"#2C2C2C\" class=\"es-content-body\"
                                   align=\"center\" cellpadding=\"0\" cellspacing=\"0\"
                                   style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#2c2c2c;width:600px\"
                                   role=\"none\">
                                <tr>
                                    <td align=\"left\"
                                        style=\"Margin:0;padding-right:30px;padding-left:30px;padding-bottom:30px;padding-top:40px\">
                                        <table cellpadding=\"0\" cellspacing=\"0\"
                                               width=\"100%\" role=\"none\"
                                               style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                            <tr>
                                                <td align=\"center\" valign=\"top\"
                                                    style=\"padding:0;Margin:0;width:540px\">
                                                    <table cellpadding=\"0\" cellspacing=\"0\"
                                                           width=\"100%\"
                                                           role=\"presentation\"
                                                           style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                                        <tr>
                                                            <td align=\"center\"
                                                                style=\"padding:0;Margin:0;padding-bottom:20px;font-size:0px\">
                                                                <a target=\"_blank\"
                                                                   href=\"https://viewstripo.email\"
                                                                   style=\"mso-line-height-rule:exactly;text-decoration:underline;color:#2C2C2C;font-size:14px\"><img
                                                                            src=\"https://fhnnvrs.stripocdn.email/content/guids/CABINET_26f7726bcadd97a2ab03d54f86a8b630ca314b98bfcd8c5969ac3c828e7d2b89/images/question.png\"
                                                                            alt=\"\"
                                                                            style=\"display:block;font-size:14px;border:0;outline:none;text-decoration:none\"
                                                                            width=\"50\"></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align=\"center\"
                                                                class=\"es-m-txt-c\"
                                                                style=\"padding:0;Margin:0;padding-bottom:15px\">
                                                                <h1 style=\"Margin:0;font-family:Montaga, Arial, serif;mso-line-height-rule:exactly;letter-spacing:0;font-size:30px;font-style:normal;font-weight:normal;line-height:36px;color:#ffffff\">
                                                                    We here to help</h1>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align=\"center\"
                                                                class=\"es-m-p0r es-m-p0l\"
                                                                style=\"padding:0;Margin:0;padding-right:40px;padding-left:40px\">
                                                                <p style=\"Margin:0;mso-line-height-rule:exactly;font-family:Lexend, Arial, sans-serif;line-height:21px;letter-spacing:0;color:#ffffff;font-size:14px\">
                                                                    If you have any
                                                                    questions or need
                                                                    assistance with this
                                                                    process, our friendly
                                                                    support team is here
                                                                    to help.</p></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td align=\"left\"
                                        style=\"padding:0;Margin:0;padding-right:30px;padding-bottom:40px;padding-left:30px\">
                                        <!--[if mso]>
                                        <table style=\"width:540px\" cellpadding=\"0\"
                                               cellspacing=\"0\">
                                            <tr>
                                                <td style=\"width:260px\" valign=\"top\">
                                        <![endif]-->
                                        <table cellpadding=\"0\" cellspacing=\"0\"
                                               class=\"es-left\" align=\"left\" role=\"none\"
                                               style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left\">
                                            <tr>
                                                <td class=\"es-m-p20b\" align=\"left\"
                                                    style=\"padding:0;Margin:0;width:260px\">
                                                    <table cellpadding=\"0\" cellspacing=\"0\"
                                                           width=\"100%\"
                                                           role=\"presentation\"
                                                           style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                                        <tr>
                                                            <td align=\"center\"
                                                                style=\"padding:0;Margin:0\">
                                                                <!--[if mso]><a
                                                                        href=\"undefined\"
                                                                        target=\"_blank\"
                                                                        hidden>
                                                                    <v:roundrect
                                                                            xmlns:v=\"urn:schemas-microsoft-com:vml\"
                                                                            xmlns:w=\"urn:schemas-microsoft-com:office:word\"
                                                                            esdevVmlButton
                                                                            href=\"undefined\"
                                                                            style=\"height:41px; v-text-anchor:middle; width:151px\"
                                                                            arcsize=\"50%\"
                                                                            stroke=\"f\"
                                                                            fillcolor=\"#d75a1c\">
                                                                        <w:anchorlock></w:anchorlock>
                                                                        <center style='color:#ffffff; font-family:Lexend, Arial, sans-serif; font-size:15px; font-weight:400; line-height:15px;  mso-text-raise:1px'>
                                                                            28 435 459
                                                                        </center>
                                                                    </v:roundrect>
                                                                </a>
                                                                <![endif]-->
                                                                <!--[if !mso]><!-- --><span
                                                                        class=\"es-button-border msohide\"
                                                                        style=\"border-style:solid;border-color:#2CB543;background:#d75a1c;border-width:0px;display:inline-block;border-radius:30px;width:auto;mso-hide:all\"><a
                                                                            class=\"es-button\"
                                                                            target=\"_blank\"
                                                                            style=\"mso-style-priority:100 !important;text-decoration:none !important;mso-line-height-rule:exactly;color:#FFFFFF;font-size:18px;padding:10px 30px 10px 30px;display:inline-block;background:#d75a1c;border-radius:30px;font-family:Lexend, Arial, sans-serif;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center;letter-spacing:0;mso-padding-alt:0;mso-border-alt:10px solid #d75a1c\"
                                                                            href=\"\">28 435 459</a></span>
                                                                <!--<![endif]--></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <!--[if mso]></td>
                                        <td style=\"width:20px\"></td>
                                        <td style=\"width:260px\" valign=\"top\"><![endif]-->
                                        <table cellpadding=\"0\" cellspacing=\"0\"
                                               class=\"es-right\" align=\"right\" role=\"none\"
                                               style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right\">
                                            <tr>
                                                <td align=\"left\"
                                                    style=\"padding:0;Margin:0;width:260px\">
                                                    <table cellpadding=\"0\" cellspacing=\"0\"
                                                           width=\"100%\"
                                                           role=\"presentation\"
                                                           style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                                        <tr>
                                                            <td align=\"center\"
                                                                style=\"padding:0;Margin:0\">
                                                                <!--[if mso]><a
                                                                        href=\"mailto:\"
                                                                        target=\"_blank\"
                                                                        hidden>
                                                                    <v:roundrect
                                                                            xmlns:v=\"urn:schemas-microsoft-com:vml\"
                                                                            xmlns:w=\"urn:schemas-microsoft-com:office:word\"
                                                                            esdevVmlButton
                                                                            href=\"mailto:\"
                                                                            style=\"height:41px; v-text-anchor:middle; width:267px\"
                                                                            arcsize=\"50%\"
                                                                            stroke=\"f\"
                                                                            fillcolor=\"#d75a1c\">
                                                                        <w:anchorlock></w:anchorlock>
                                                                        <center style='color:#ffffff; font-family:Lexend, Arial, sans-serif; font-size:15px; font-weight:400; line-height:15px;  mso-text-raise:1px'>
                                                                            gymworld135@gmail.com
                                                                        </center>
                                                                    </v:roundrect>
                                                                </a>
                                                                <![endif]-->
                                                                <!--[if !mso]><!-- --><span
                                                                        class=\"es-button-border msohide\"
                                                                        style=\"border-style:solid;border-color:#2CB543;background:#d75a1c;border-width:0px;display:inline-block;border-radius:30px;width:auto;mso-hide:all\"><a
                                                                            href=\"\"
                                                                            class=\"es-button\"
                                                                            target=\"_blank\"
                                                                            style=\"mso-style-priority:100 !important;text-decoration:none !important;mso-line-height-rule:exactly;color:#FFFFFF;font-size:18px;padding:10px 30px 10px 30px;display:inline-block;background:#d75a1c;border-radius:30px;font-family:Lexend, Arial, sans-serif;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center;letter-spacing:0;mso-padding-alt:0;mso-border-alt:10px solid #d75a1c\">gymworld135@gmail.com</a></span>
                                                                <!--<![endif]--></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <!--[if mso]></td></tr></table><![endif]--></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table cellpadding=\"0\" cellspacing=\"0\" class=\"es-content\" align=\"center\"
                       role=\"none\"
                       style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:100%;table-layout:fixed !important\">
                    <tr>
                        <td align=\"center\" style=\"padding:0;Margin:0\">
                            <table bgcolor=\"#ffffff\" class=\"es-content-body\"
                                   align=\"center\" cellpadding=\"0\" cellspacing=\"0\"
                                   role=\"none\"
                                   style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px\">
                                <tr>
                                    <td class=\"es-m-p0r\" align=\"left\"
                                        style=\"padding:0;Margin:0;padding-right:30px\">
                                        <!--[if mso]>
                                        <table style=\"width:570px\" cellpadding=\"0\"
                                               cellspacing=\"0\">
                                            <tr>
                                                <td style=\"width:275px\" valign=\"top\">
                                        <![endif]-->
                                        <table cellpadding=\"0\" cellspacing=\"0\"
                                               class=\"es-left\" align=\"left\" role=\"none\"
                                               style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left\">
                                            <tr>
                                                <td class=\"es-m-p20b\" align=\"left\"
                                                    style=\"padding:0;Margin:0;width:275px\">
                                                    <table cellpadding=\"0\" cellspacing=\"0\"
                                                           width=\"100%\"
                                                           role=\"presentation\"
                                                           style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                                        <tr>
                                                            <td align=\"center\"
                                                                style=\"padding:0;Margin:0;font-size:0px\">
                                                                <a target=\"_blank\"
                                                                   href=\"https://viewstripo.email\"
                                                                   style=\"mso-line-height-rule:exactly;text-decoration:underline;color:#2C2C2C;font-size:14px\"><img
                                                                            class=\"adapt-img\"
                                                                            src=\"https://fhnnvrs.stripocdn.email/content/guids/CABINET_5f6622e7e5cd032fdf683e0242607800984156d8420a3bda259a1a9c943308fd/images/gcd0538681c99bc51e92de576bca93f5aab1bbfd8da78bd9385825acb11e81a372a82fb840204e94c54f6fdca43daeefe_640.jpeg\"
                                                                            alt=\"Doreen Henry\"
                                                                            style=\"display:block;font-size:14px;border:0;outline:none;text-decoration:none\"
                                                                            width=\"275\"
                                                                            title=\"Doreen Henry\"></a>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <!--[if mso]></td>
                                        <td style=\"width:20px\"></td>
                                        <td style=\"width:275px\" valign=\"top\"><![endif]-->
                                        <table cellpadding=\"0\" cellspacing=\"0\"
                                               class=\"es-right\" align=\"right\" role=\"none\"
                                               style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right\">
                                            <tr>
                                                <td align=\"left\"
                                                    style=\"padding:0;Margin:0;width:275px\">
                                                    <table cellpadding=\"0\" cellspacing=\"0\"
                                                           width=\"100%\"
                                                           role=\"presentation\"
                                                           style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                                        <tr class=\"es-mobile-hidden\">
                                                            <td align=\"center\" height=\"45\"
                                                                style=\"padding:0;Margin:0\"></td>
                                                        </tr>
                                                        <tr>
                                                            <td align=\"left\"
                                                                class=\"es-m-p20t es-m-p20b es-m-p30r es-m-p30l\"
                                                                style=\"padding:0;Margin:0;padding-bottom:30px;padding-top:40px;padding-right:15px\">
                                                                <p style=\"Margin:0;mso-line-height-rule:exactly;font-family:Lexend, Arial, sans-serif;line-height:21px;letter-spacing:0;color:#2C2C2C;font-size:14px\">
                                                                    Thank you for choosing
                                                                    <strong>Power
                                                                        Gym</strong> for
                                                                    your fitness needs. We
                                                                    are committed to
                                                                    providing you with
                                                                    outstanding services.
                                                                </p>
                                                                <p style=\"Margin:0;mso-line-height-rule:exactly;font-family:Lexend, Arial, sans-serif;line-height:21px;letter-spacing:0;color:#2C2C2C;font-size:14px\">
                                                                    <br></p>
                                                                <p style=\"Margin:0;mso-line-height-rule:exactly;font-family:Lexend, Arial, sans-serif;line-height:21px;letter-spacing:0;color:#2C2C2C;font-size:14px\">
                                                                    Warm regards</p></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <!--[if mso]></td></tr></table><![endif]--></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table cellpadding=\"0\" cellspacing=\"0\" class=\"es-footer\" align=\"center\"
                       role=\"none\"
                       style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:100%;table-layout:fixed !important;background-color:transparent;background-repeat:repeat;background-position:center top\">
                    <tr>
                        <td align=\"center\" style=\"padding:0;Margin:0\">
                            <table class=\"es-footer-body\" cellspacing=\"0\" cellpadding=\"0\"
                                   bgcolor=\"#ffffff\" align=\"center\" role=\"none\"
                                   style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#939393;width:600px\">
                                <tr>
                                    <td align=\"left\"
                                        style=\"Margin:0;padding-right:30px;padding-left:30px;padding-top:35px;padding-bottom:35px\">
                                        <!--[if mso]>
                                        <table style=\"width:540px\" cellpadding=\"0\"
                                               cellspacing=\"0\">
                                            <tr>
                                                <td style=\"width:235px\" valign=\"top\">
                                        <![endif]-->
                                        <table cellspacing=\"0\" cellpadding=\"0\"
                                               align=\"left\" class=\"es-left\" role=\"none\"
                                               style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left\">
                                            <tr>
                                                <td class=\"es-m-p20b\" align=\"left\"
                                                    style=\"padding:0;Margin:0;width:235px\">
                                                    <table width=\"100%\" cellspacing=\"0\"
                                                           cellpadding=\"0\"
                                                           role=\"presentation\"
                                                           style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                                        <tr>
                                                            <td align=\"left\"
                                                                style=\"padding:0;Margin:0;padding-bottom:5px\">
                                                                <h1 style=\"Margin:0;font-family:Montaga, Arial, serif;mso-line-height-rule:exactly;letter-spacing:0;font-size:30px;font-style:normal;font-weight:normal;line-height:36px;color:#2C2C2C\">
                                                                    Contact Us</h1></td>
                                                        </tr>
                                                        <tr>
                                                            <td align=\"left\"
                                                                style=\"padding:0;Margin:0;padding-bottom:5px;padding-top:15px\">
                                                                <p style=\"Margin:0;mso-line-height-rule:exactly;font-family:Lexend, Arial, sans-serif;line-height:21px;letter-spacing:0;color:#2C2C2C;font-size:14px\">
                                                                    <br>gymworld135@gmail.com
                                                                </p></td>
                                                        </tr>
                                                        <tr>
                                                            <td align=\"left\"
                                                                style=\"padding:0;Margin:0;padding-bottom:5px;padding-top:5px\">
                                                                <p style=\"Margin:0;mso-line-height-rule:exactly;font-family:Lexend, Arial, sans-serif;line-height:21px;letter-spacing:0;color:#2C2C2C;font-size:14px\">
                                                                    <a target=\"_blank\"
                                                                       style=\"mso-line-height-rule:exactly;text-decoration:none;color:#2C2C2C;font-size:14px\"
                                                                       href=\"tel:+(000)123456789\">+(216)
                                                                        28</a> 435 459</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align=\"left\"
                                                                style=\"padding:0;Margin:0;padding-bottom:5px;padding-top:5px\">
                                                                <p style=\"Margin:0;mso-line-height-rule:exactly;font-family:Lexend, Arial, sans-serif;line-height:21px;letter-spacing:0;color:#2C2C2C;font-size:14px\">
                                                                    Centre Urbain Nord
                                                                    ,Tunisie<br>index 1082
                                                                </p></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <!--[if mso]></td>
                                        <td style=\"width:20px\"></td>
                                        <td style=\"width:285px\" valign=\"top\"><![endif]-->
                                        <table cellpadding=\"0\" cellspacing=\"0\"
                                               class=\"es-right\" align=\"right\" role=\"none\"
                                               style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right\">
                                            <tr>
                                                <td align=\"left\"
                                                    style=\"padding:0;Margin:0;width:285px\">
                                                    <table cellpadding=\"0\" cellspacing=\"0\"
                                                           width=\"100%\"
                                                           role=\"presentation\"
                                                           style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                                        <tr>
                                                            <td align=\"left\"
                                                                style=\"padding:0;Margin:0\">
                                                                <p style=\"Margin:0;mso-line-height-rule:exactly;font-family:Lexend, Arial, sans-serif;line-height:21px;letter-spacing:0;color:#2C2C2C;font-size:14px\">
                                                                    ​</p></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <!--[if mso]></td></tr></table><![endif]--></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table class=\"es-footer\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"
                       role=\"none\"
                       style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:100%;table-layout:fixed !important;background-color:transparent;background-repeat:repeat;background-position:center top\">
                    <tr>
                        <td align=\"center\" style=\"padding:0;Margin:0\">
                            <table class=\"es-footer-body\" cellspacing=\"0\" cellpadding=\"0\"
                                   align=\"center\"
                                   style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px\"
                                   role=\"none\">
                                <tr>
                                    <td align=\"left\"
                                        style=\"Margin:0;padding-top:20px;padding-bottom:20px;padding-right:20px;padding-left:20px\">
                                        <table cellspacing=\"0\" cellpadding=\"0\"
                                               width=\"100%\" role=\"none\"
                                               style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                            <tr>
                                                <td align=\"left\"
                                                    style=\"padding:0;Margin:0;width:560px\">
                                                    <table width=\"100%\" cellspacing=\"0\"
                                                           cellpadding=\"0\" role=\"none\"
                                                           style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                                        <tr>
                                                            <td align=\"center\"
                                                                style=\"padding:0;Margin:0;display:none\"></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "registration/confirmation_email.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  580 => 543,  561 => 527,  44 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{# <h1>Hi! Please confirm your email!</h1>

<p>
    Please confirm your email address by clicking the following link: <br><br>
    <a href=\"{{ signedUrl|raw }}\">Confirm my Email</a>.
    This link will expire in {{ expiresAtMessageKey|trans(expiresAtMessageData, 'VerifyEmailBundle') }}.
</p>

<p>
    Cheers!
</p> #}
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\"
        \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html dir=\"ltr\" lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
    <meta name=\"x-apple-disable-message-reformatting\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"telephone=no\" name=\"format-detection\">
    <title>New email template 2024-05-01</title><!--[if (mso 16)]>
    <style type=\"text/css\">
        a {
            text-decoration: none;
        }
    </style>
    <![endif]--><!--[if gte mso 9]>
    <style>sup {
        font-size: 100% !important;
    }</style><![endif]--><!--[if gte mso 9]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG></o:AllowPNG>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]--><!--[if !mso]><!-- -->
    <link rel=\"stylesheet\"
          href=\"https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i\">
    <!--<![endif]-->
    <style type=\"text/css\">
        .rollover:hover .rollover-first {
            max-height: 0px !important;
            display: none !important;
        }

        .rollover:hover .rollover-second {
            max-height: none !important;
            display: block !important;
        }

        .rollover span {
            font-size: 0px;
        }

        u + .body img ~ div div {
            display: none;
        }

        #outlook a {
            padding: 0;
        }

        span.MsoHyperlink,
        span.MsoHyperlinkFollowed {
            color: inherit;
            mso-style-priority: 99;
        }

        a.es-button {
            mso-style-priority: 100 !important;
            text-decoration: none !important;
        }

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        .es-desk-hidden {
            display: none;
            float: left;
            overflow: hidden;
            width: 0;
            max-height: 0;
            line-height: 0;
            mso-hide: all;
        }

        .es-button-border:hover > a.es-button {
            color: #ffffff !important;
        }

        @media only screen and (max-width: 600px) {
            .es-m-p0r {
                padding-right: 0px !important
            }

            .es-m-p20b {
                padding-bottom: 20px !important
            }

            .es-m-p0l {
                padding-left: 0px !important
            }

            .es-m-p20t {
                padding-top: 20px !important
            }

            .es-m-p30r {
                padding-right: 30px !important
            }

            .es-m-p30l {
                padding-left: 30px !important
            }

            *[class=\"gmail-fix\"] {
                display: none !important
            }

            p, a {
                line-height: 150% !important
            }

            h1, h1 a {
                line-height: 120% !important
            }

            h2, h2 a {
                line-height: 120% !important
            }

            h3, h3 a {
                line-height: 120% !important
            }

            h4, h4 a {
                line-height: 120% !important
            }

            h5, h5 a {
                line-height: 120% !important
            }

            h6, h6 a {
                line-height: 120% !important
            }

            h1 {
                font-size: 30px !important;
                text-align: left
            }

            h2 {
                font-size: 24px !important;
                text-align: left
            }

            h3 {
                font-size: 20px !important;
                text-align: left
            }

            h4 {
                font-size: 24px !important;
                text-align: left
            }

            h5 {
                font-size: 20px !important;
                text-align: left
            }

            h6 {
                font-size: 16px !important;
                text-align: left
            }

            .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a {
                font-size: 30px !important
            }

            .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a {
                font-size: 24px !important
            }

            .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a {
                font-size: 20px !important
            }

            .es-header-body h4 a, .es-content-body h4 a, .es-footer-body h4 a {
                font-size: 24px !important
            }

            .es-header-body h5 a, .es-content-body h5 a, .es-footer-body h5 a {
                font-size: 20px !important
            }

            .es-header-body h6 a, .es-content-body h6 a, .es-footer-body h6 a {
                font-size: 16px !important
            }

            .es-menu td a {
                font-size: 14px !important
            }

            .es-header-body p, .es-header-body a {
                font-size: 14px !important
            }

            .es-content-body p, .es-content-body a {
                font-size: 14px !important
            }

            .es-footer-body p, .es-footer-body a {
                font-size: 14px !important
            }

            .es-infoblock p, .es-infoblock a {
                font-size: 12px !important
            }

            .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3, .es-m-txt-c h4, .es-m-txt-c h5, .es-m-txt-c h6 {
                text-align: center !important
            }

            .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3, .es-m-txt-r h4, .es-m-txt-r h5, .es-m-txt-r h6 {
                text-align: right !important
            }

            .es-m-txt-j, .es-m-txt-j h1, .es-m-txt-j h2, .es-m-txt-j h3, .es-m-txt-j h4, .es-m-txt-j h5, .es-m-txt-j h6 {
                text-align: justify !important
            }

            .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3, .es-m-txt-l h4, .es-m-txt-l h5, .es-m-txt-l h6 {
                text-align: left !important
            }

            .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img {
                display: inline !important
            }

            .es-m-txt-r .rollover:hover .rollover-second, .es-m-txt-c .rollover:hover .rollover-second, .es-m-txt-l .rollover:hover .rollover-second {
                display: inline !important
            }

            .es-m-txt-r .rollover span, .es-m-txt-c .rollover span, .es-m-txt-l .rollover span {
                line-height: 0 !important;
                font-size: 0 !important
            }

            .es-spacer {
                display: inline-table
            }

            a.es-button, button.es-button {
                font-size: 18px !important;
                line-height: 120% !important
            }

            a.es-button, button.es-button, .es-button-border {
                display: inline-block !important
            }

            .es-m-fw, .es-m-fw.es-fw, .es-m-fw .es-button {
                display: block !important
            }

            .es-m-il, .es-m-il .es-button, .es-social, .es-social td, .es-menu {
                display: inline-block !important
            }

            .es-adaptive table, .es-left, .es-right {
                width: 100% !important
            }

            .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header {
                width: 100% !important;
                max-width: 600px !important
            }

            .adapt-img {
                width: 100% !important;
                height: auto !important
            }

            .es-mobile-hidden, .es-hidden {
                display: none !important
            }

            .es-desk-hidden {
                width: auto !important;
                overflow: visible !important;
                float: none !important;
                max-height: inherit !important;
                line-height: inherit !important
            }

            tr.es-desk-hidden {
                display: table-row !important
            }

            table.es-desk-hidden {
                display: table !important
            }

            td.es-desk-menu-hidden {
                display: table-cell !important
            }

            .es-menu td {
                width: 1% !important
            }

            table.es-table-not-adapt, .esd-block-html table {
                width: auto !important
            }

            .es-social td {
                padding-bottom: 10px
            }

            .h-auto {
                height: auto !important
            }
        }

        @media screen and (max-width: 384px) {
            .mail-message-content {
                width: 414px !important
            }
        }
    </style>
</head>
<body class=\"body\" style=\"width:100%;height:100%;padding:0;Margin:0\">
<div dir=\"ltr\" class=\"es-wrapper-color\" lang=\"en\" style=\"background-color:#EDEDED\">
    <!--[if gte mso 9]>
    <v:background xmlns:v=\"urn:schemas-microsoft-com:vml\" fill=\"t\">
        <v:fill type=\"tile\" color=\"#EDEDED\"></v:fill>
    </v:background>
    <![endif]-->
    <table class=\"es-wrapper\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" role=\"none\"
           style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;background-color:#EDEDED\">
        <tr>
            <td valign=\"top\" style=\"padding:0;Margin:0\">
                <table class=\"es-header\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"
                       role=\"none\"
                       style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:100%;table-layout:fixed !important;background-color:transparent;background-repeat:repeat;background-position:center top\">
                    <tr>
                        <td align=\"center\" style=\"padding:0;Margin:0\">
                            <table class=\"es-header-body\" cellspacing=\"0\" cellpadding=\"0\"
                                   bgcolor=\"#ffffff\" align=\"center\" role=\"none\"
                                   style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#2C2C2C;width:600px\">
                                <tr>
                                    <td align=\"left\" style=\"padding:30px;Margin:0\">
                                        <table cellspacing=\"0\" cellpadding=\"0\"
                                               width=\"100%\" role=\"none\"
                                               style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                            <tr>
                                                <td class=\"es-m-p0r\" valign=\"top\"
                                                    align=\"center\"
                                                    style=\"padding:0;Margin:0;width:540px\">
                                                    <table width=\"100%\" cellspacing=\"0\"
                                                           cellpadding=\"0\"
                                                           role=\"presentation\"
                                                           style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                                        <tr>
                                                            <td align=\"left\"
                                                                style=\"padding:0;Margin:0\">
                                                                <h1 style=\"Margin:0;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;mso-line-height-rule:exactly;letter-spacing:0;font-size:30px;font-style:normal;font-weight:normal;line-height:36px;color:#e46e0d\"
                                                                    align=\"center\">
                                                                    <strong>Power Gym&nbsp;</strong>
                                                                </h1></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table class=\"es-content\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"
                       role=\"none\"
                       style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:100%;table-layout:fixed !important\">
                    <tr>
                        <td align=\"center\" style=\"padding:0;Margin:0\">
                            <table class=\"es-content-body\" cellspacing=\"0\" cellpadding=\"0\"
                                   bgcolor=\"#ffffff\" align=\"center\" role=\"none\"
                                   style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px\">
                                <tr>
                                    <td align=\"left\" style=\"padding:0;Margin:0\">
                                        <table width=\"100%\" cellspacing=\"0\"
                                               cellpadding=\"0\" role=\"none\"
                                               style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                            <tr>
                                                <td class=\"es-m-p0r es-m-p20b\"
                                                    valign=\"top\" align=\"center\"
                                                    style=\"padding:0;Margin:0;width:600px\">
                                                    <table width=\"100%\" cellspacing=\"0\"
                                                           cellpadding=\"0\"
                                                           role=\"presentation\"
                                                           style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                                        <tr>
                                                            <td align=\"center\"
                                                                style=\"padding:0;Margin:0;font-size:0px\">
                                                                <a target=\"_blank\"
                                                                   href=\"https://viewstripo.email\"
                                                                   style=\"mso-line-height-rule:exactly;text-decoration:underline;color:#2C2C2C;font-size:14px\"><img
                                                                            class=\"adapt-img\"
                                                                            src=\"https://fhnnvrs.stripocdn.email/content/guids/CABINET_5f6622e7e5cd032fdf683e0242607800984156d8420a3bda259a1a9c943308fd/images/g560202075f68584426169936352fa7bf046d7b9cf7f3d03b9d62abb797731ed8e57931fcdadc211dad33d49776d9fe8d_640.jpeg\"
                                                                            alt=\"Payment Details Update Required\"
                                                                            style=\"display:block;font-size:14px;border:0;outline:none;text-decoration:none\"
                                                                            width=\"600\"
                                                                            title=\"Payment Details Update Required\"></a>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td align=\"left\"
                                        style=\"Margin:0;padding-top:30px;padding-right:30px;padding-bottom:40px;padding-left:30px\">
                                        <table cellpadding=\"0\" cellspacing=\"0\"
                                               width=\"100%\" role=\"none\"
                                               style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                            <tr>
                                                <td align=\"center\" valign=\"top\"
                                                    style=\"padding:0;Margin:0;width:540px\">
                                                    <table cellpadding=\"0\" cellspacing=\"0\"
                                                           width=\"100%\"
                                                           role=\"presentation\"
                                                           style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                                        <tr>
                                                            <td align=\"center\"
                                                                style=\"padding:0;Margin:0\">
                                                                <p style=\"Margin:0;mso-line-height-rule:exactly;font-family:Lexend, Arial, sans-serif;line-height:18px;letter-spacing:0;color:#ff4a4a;font-size:12px\">
                                                                    <strong>​</strong></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align=\"center\"
                                                                style=\"padding:0;Margin:0;padding-top:20px;padding-bottom:30px\">
                                                                <h1 style=\"Margin:0;font-family:Montaga, Arial, serif;mso-line-height-rule:exactly;letter-spacing:0;font-size:30px;font-style:normal;font-weight:normal;line-height:36px;color:#2C2C2C\">
                                                                    Welcome</h1></td>
                                                        </tr>
                                                        <tr>
                                                            <td align=\"left\"
                                                                style=\"padding:0;Margin:0;padding-bottom:30px\">
                                                                <p style=\"Margin:0;mso-line-height-rule:exactly;font-family:Lexend, Arial, sans-serif;line-height:21px;letter-spacing:0;color:#2C2C2C;font-size:14px\">
                                                                    Welcome to our
                                                                    community ! &nbsp;We're
                                                                    thrilled to have you
                                                                    here and can't wait
                                                                    for you to start
                                                                    exploring. We believe
                                                                    you'll find great
                                                                    value and make
                                                                    meaningful connections
                                                                    here. &nbsp;Before you
                                                                    get started, there's
                                                                    just one small step
                                                                    left. We need to
                                                                    confirm your email
                                                                    address to ensure that
                                                                    you receive all future
                                                                    updates from us. It
                                                                    also helps us keep our
                                                                    community safe and
                                                                    secure. &nbsp;Please
                                                                    click the link in the
                                                                    email we just sent you
                                                                    to verify your
                                                                    account. If you can't
                                                                    find the email, check
                                                                    your spam folder or
                                                                    request a new
                                                                    verification email.
                                                                    &nbsp;Thank you for
                                                                    joining us, and
                                                                    welcome aboard!
                                                                    &nbsp;</p>
                                                                <p style=\"Margin:0;mso-line-height-rule:exactly;font-family:Lexend, Arial, sans-serif;line-height:21px;letter-spacing:0;color:#2C2C2C;font-size:14px\">
                                                                    Best, Power Gym</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align=\"center\"
                                                                style=\"padding:0;Margin:0\">
                                                                <!--[if mso]><a
                                                                        href=\"undefined\"
                                                                        target=\"_blank\"
                                                                        hidden>
                                                                    <v:roundrect
                                                                            xmlns:v=\"urn:schemas-microsoft-com:vml\"
                                                                            xmlns:w=\"urn:schemas-microsoft-com:office:word\"
                                                                            esdevVmlButton
                                                                            href=\"undefined\"
                                                                            style=\"height:41px; v-text-anchor:middle; width:156px\"
                                                                            arcsize=\"50%\"
                                                                            stroke=\"f\"
                                                                            fillcolor=\"#d75a1c\">
                                                                        <w:anchorlock></w:anchorlock>
                                                                        <center style='color:#ffffff; font-family:Lexend, Arial, sans-serif; font-size:15px; font-weight:400; line-height:15px;  mso-text-raise:1px'>
                                                                            Verify Email
                                                                        </center>
                                                                    </v:roundrect>
                                                                </a>
                                                                <![endif]--><!--[if
                                                                !mso]><!-- --><span
                                                                        class=\"es-button-border msohide\"
                                                                        style=\"border-style:solid;border-color:#2CB543;background:#d75a1c;border-width:0px;display:inline-block;border-radius:30px;width:auto;mso-hide:all\"><a
                                                                            class=\"es-button\"
                                                                            target=\"_blank\"
                                                                            style=\"mso-style-priority:100 !important;text-decoration:none !important;mso-line-height-rule:exactly;color:#FFFFFF;font-size:18px;padding:10px 30px 10px 30px;display:inline-block;background:#d75a1c;border-radius:30px;font-family:Lexend, Arial, sans-serif;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center;letter-spacing:0;mso-padding-alt:0;mso-border-alt:10px solid #d75a1c\"
                                                                            href=\"{{ signedUrl|raw }}\">

                                                                        Verify Email</a></span>
                                                                <!--<![endif]--></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                This link will expire
                in {{ expiresAtMessageKey|trans(expiresAtMessageData, 'VerifyEmailBundle') }}
                .
                <table cellpadding=\"0\" cellspacing=\"0\" class=\"es-content\" align=\"center\"
                       role=\"none\"
                       style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:100%;table-layout:fixed !important\">
                    <tr>
                        <td align=\"center\" style=\"padding:0;Margin:0\">
                            <table bgcolor=\"#2C2C2C\" class=\"es-content-body\"
                                   align=\"center\" cellpadding=\"0\" cellspacing=\"0\"
                                   style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#2c2c2c;width:600px\"
                                   role=\"none\">
                                <tr>
                                    <td align=\"left\"
                                        style=\"Margin:0;padding-right:30px;padding-left:30px;padding-bottom:30px;padding-top:40px\">
                                        <table cellpadding=\"0\" cellspacing=\"0\"
                                               width=\"100%\" role=\"none\"
                                               style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                            <tr>
                                                <td align=\"center\" valign=\"top\"
                                                    style=\"padding:0;Margin:0;width:540px\">
                                                    <table cellpadding=\"0\" cellspacing=\"0\"
                                                           width=\"100%\"
                                                           role=\"presentation\"
                                                           style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                                        <tr>
                                                            <td align=\"center\"
                                                                style=\"padding:0;Margin:0;padding-bottom:20px;font-size:0px\">
                                                                <a target=\"_blank\"
                                                                   href=\"https://viewstripo.email\"
                                                                   style=\"mso-line-height-rule:exactly;text-decoration:underline;color:#2C2C2C;font-size:14px\"><img
                                                                            src=\"https://fhnnvrs.stripocdn.email/content/guids/CABINET_26f7726bcadd97a2ab03d54f86a8b630ca314b98bfcd8c5969ac3c828e7d2b89/images/question.png\"
                                                                            alt=\"\"
                                                                            style=\"display:block;font-size:14px;border:0;outline:none;text-decoration:none\"
                                                                            width=\"50\"></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align=\"center\"
                                                                class=\"es-m-txt-c\"
                                                                style=\"padding:0;Margin:0;padding-bottom:15px\">
                                                                <h1 style=\"Margin:0;font-family:Montaga, Arial, serif;mso-line-height-rule:exactly;letter-spacing:0;font-size:30px;font-style:normal;font-weight:normal;line-height:36px;color:#ffffff\">
                                                                    We here to help</h1>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align=\"center\"
                                                                class=\"es-m-p0r es-m-p0l\"
                                                                style=\"padding:0;Margin:0;padding-right:40px;padding-left:40px\">
                                                                <p style=\"Margin:0;mso-line-height-rule:exactly;font-family:Lexend, Arial, sans-serif;line-height:21px;letter-spacing:0;color:#ffffff;font-size:14px\">
                                                                    If you have any
                                                                    questions or need
                                                                    assistance with this
                                                                    process, our friendly
                                                                    support team is here
                                                                    to help.</p></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td align=\"left\"
                                        style=\"padding:0;Margin:0;padding-right:30px;padding-bottom:40px;padding-left:30px\">
                                        <!--[if mso]>
                                        <table style=\"width:540px\" cellpadding=\"0\"
                                               cellspacing=\"0\">
                                            <tr>
                                                <td style=\"width:260px\" valign=\"top\">
                                        <![endif]-->
                                        <table cellpadding=\"0\" cellspacing=\"0\"
                                               class=\"es-left\" align=\"left\" role=\"none\"
                                               style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left\">
                                            <tr>
                                                <td class=\"es-m-p20b\" align=\"left\"
                                                    style=\"padding:0;Margin:0;width:260px\">
                                                    <table cellpadding=\"0\" cellspacing=\"0\"
                                                           width=\"100%\"
                                                           role=\"presentation\"
                                                           style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                                        <tr>
                                                            <td align=\"center\"
                                                                style=\"padding:0;Margin:0\">
                                                                <!--[if mso]><a
                                                                        href=\"undefined\"
                                                                        target=\"_blank\"
                                                                        hidden>
                                                                    <v:roundrect
                                                                            xmlns:v=\"urn:schemas-microsoft-com:vml\"
                                                                            xmlns:w=\"urn:schemas-microsoft-com:office:word\"
                                                                            esdevVmlButton
                                                                            href=\"undefined\"
                                                                            style=\"height:41px; v-text-anchor:middle; width:151px\"
                                                                            arcsize=\"50%\"
                                                                            stroke=\"f\"
                                                                            fillcolor=\"#d75a1c\">
                                                                        <w:anchorlock></w:anchorlock>
                                                                        <center style='color:#ffffff; font-family:Lexend, Arial, sans-serif; font-size:15px; font-weight:400; line-height:15px;  mso-text-raise:1px'>
                                                                            28 435 459
                                                                        </center>
                                                                    </v:roundrect>
                                                                </a>
                                                                <![endif]-->
                                                                <!--[if !mso]><!-- --><span
                                                                        class=\"es-button-border msohide\"
                                                                        style=\"border-style:solid;border-color:#2CB543;background:#d75a1c;border-width:0px;display:inline-block;border-radius:30px;width:auto;mso-hide:all\"><a
                                                                            class=\"es-button\"
                                                                            target=\"_blank\"
                                                                            style=\"mso-style-priority:100 !important;text-decoration:none !important;mso-line-height-rule:exactly;color:#FFFFFF;font-size:18px;padding:10px 30px 10px 30px;display:inline-block;background:#d75a1c;border-radius:30px;font-family:Lexend, Arial, sans-serif;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center;letter-spacing:0;mso-padding-alt:0;mso-border-alt:10px solid #d75a1c\"
                                                                            href=\"\">28 435 459</a></span>
                                                                <!--<![endif]--></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <!--[if mso]></td>
                                        <td style=\"width:20px\"></td>
                                        <td style=\"width:260px\" valign=\"top\"><![endif]-->
                                        <table cellpadding=\"0\" cellspacing=\"0\"
                                               class=\"es-right\" align=\"right\" role=\"none\"
                                               style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right\">
                                            <tr>
                                                <td align=\"left\"
                                                    style=\"padding:0;Margin:0;width:260px\">
                                                    <table cellpadding=\"0\" cellspacing=\"0\"
                                                           width=\"100%\"
                                                           role=\"presentation\"
                                                           style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                                        <tr>
                                                            <td align=\"center\"
                                                                style=\"padding:0;Margin:0\">
                                                                <!--[if mso]><a
                                                                        href=\"mailto:\"
                                                                        target=\"_blank\"
                                                                        hidden>
                                                                    <v:roundrect
                                                                            xmlns:v=\"urn:schemas-microsoft-com:vml\"
                                                                            xmlns:w=\"urn:schemas-microsoft-com:office:word\"
                                                                            esdevVmlButton
                                                                            href=\"mailto:\"
                                                                            style=\"height:41px; v-text-anchor:middle; width:267px\"
                                                                            arcsize=\"50%\"
                                                                            stroke=\"f\"
                                                                            fillcolor=\"#d75a1c\">
                                                                        <w:anchorlock></w:anchorlock>
                                                                        <center style='color:#ffffff; font-family:Lexend, Arial, sans-serif; font-size:15px; font-weight:400; line-height:15px;  mso-text-raise:1px'>
                                                                            gymworld135@gmail.com
                                                                        </center>
                                                                    </v:roundrect>
                                                                </a>
                                                                <![endif]-->
                                                                <!--[if !mso]><!-- --><span
                                                                        class=\"es-button-border msohide\"
                                                                        style=\"border-style:solid;border-color:#2CB543;background:#d75a1c;border-width:0px;display:inline-block;border-radius:30px;width:auto;mso-hide:all\"><a
                                                                            href=\"\"
                                                                            class=\"es-button\"
                                                                            target=\"_blank\"
                                                                            style=\"mso-style-priority:100 !important;text-decoration:none !important;mso-line-height-rule:exactly;color:#FFFFFF;font-size:18px;padding:10px 30px 10px 30px;display:inline-block;background:#d75a1c;border-radius:30px;font-family:Lexend, Arial, sans-serif;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center;letter-spacing:0;mso-padding-alt:0;mso-border-alt:10px solid #d75a1c\">gymworld135@gmail.com</a></span>
                                                                <!--<![endif]--></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <!--[if mso]></td></tr></table><![endif]--></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table cellpadding=\"0\" cellspacing=\"0\" class=\"es-content\" align=\"center\"
                       role=\"none\"
                       style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:100%;table-layout:fixed !important\">
                    <tr>
                        <td align=\"center\" style=\"padding:0;Margin:0\">
                            <table bgcolor=\"#ffffff\" class=\"es-content-body\"
                                   align=\"center\" cellpadding=\"0\" cellspacing=\"0\"
                                   role=\"none\"
                                   style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px\">
                                <tr>
                                    <td class=\"es-m-p0r\" align=\"left\"
                                        style=\"padding:0;Margin:0;padding-right:30px\">
                                        <!--[if mso]>
                                        <table style=\"width:570px\" cellpadding=\"0\"
                                               cellspacing=\"0\">
                                            <tr>
                                                <td style=\"width:275px\" valign=\"top\">
                                        <![endif]-->
                                        <table cellpadding=\"0\" cellspacing=\"0\"
                                               class=\"es-left\" align=\"left\" role=\"none\"
                                               style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left\">
                                            <tr>
                                                <td class=\"es-m-p20b\" align=\"left\"
                                                    style=\"padding:0;Margin:0;width:275px\">
                                                    <table cellpadding=\"0\" cellspacing=\"0\"
                                                           width=\"100%\"
                                                           role=\"presentation\"
                                                           style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                                        <tr>
                                                            <td align=\"center\"
                                                                style=\"padding:0;Margin:0;font-size:0px\">
                                                                <a target=\"_blank\"
                                                                   href=\"https://viewstripo.email\"
                                                                   style=\"mso-line-height-rule:exactly;text-decoration:underline;color:#2C2C2C;font-size:14px\"><img
                                                                            class=\"adapt-img\"
                                                                            src=\"https://fhnnvrs.stripocdn.email/content/guids/CABINET_5f6622e7e5cd032fdf683e0242607800984156d8420a3bda259a1a9c943308fd/images/gcd0538681c99bc51e92de576bca93f5aab1bbfd8da78bd9385825acb11e81a372a82fb840204e94c54f6fdca43daeefe_640.jpeg\"
                                                                            alt=\"Doreen Henry\"
                                                                            style=\"display:block;font-size:14px;border:0;outline:none;text-decoration:none\"
                                                                            width=\"275\"
                                                                            title=\"Doreen Henry\"></a>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <!--[if mso]></td>
                                        <td style=\"width:20px\"></td>
                                        <td style=\"width:275px\" valign=\"top\"><![endif]-->
                                        <table cellpadding=\"0\" cellspacing=\"0\"
                                               class=\"es-right\" align=\"right\" role=\"none\"
                                               style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right\">
                                            <tr>
                                                <td align=\"left\"
                                                    style=\"padding:0;Margin:0;width:275px\">
                                                    <table cellpadding=\"0\" cellspacing=\"0\"
                                                           width=\"100%\"
                                                           role=\"presentation\"
                                                           style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                                        <tr class=\"es-mobile-hidden\">
                                                            <td align=\"center\" height=\"45\"
                                                                style=\"padding:0;Margin:0\"></td>
                                                        </tr>
                                                        <tr>
                                                            <td align=\"left\"
                                                                class=\"es-m-p20t es-m-p20b es-m-p30r es-m-p30l\"
                                                                style=\"padding:0;Margin:0;padding-bottom:30px;padding-top:40px;padding-right:15px\">
                                                                <p style=\"Margin:0;mso-line-height-rule:exactly;font-family:Lexend, Arial, sans-serif;line-height:21px;letter-spacing:0;color:#2C2C2C;font-size:14px\">
                                                                    Thank you for choosing
                                                                    <strong>Power
                                                                        Gym</strong> for
                                                                    your fitness needs. We
                                                                    are committed to
                                                                    providing you with
                                                                    outstanding services.
                                                                </p>
                                                                <p style=\"Margin:0;mso-line-height-rule:exactly;font-family:Lexend, Arial, sans-serif;line-height:21px;letter-spacing:0;color:#2C2C2C;font-size:14px\">
                                                                    <br></p>
                                                                <p style=\"Margin:0;mso-line-height-rule:exactly;font-family:Lexend, Arial, sans-serif;line-height:21px;letter-spacing:0;color:#2C2C2C;font-size:14px\">
                                                                    Warm regards</p></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <!--[if mso]></td></tr></table><![endif]--></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table cellpadding=\"0\" cellspacing=\"0\" class=\"es-footer\" align=\"center\"
                       role=\"none\"
                       style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:100%;table-layout:fixed !important;background-color:transparent;background-repeat:repeat;background-position:center top\">
                    <tr>
                        <td align=\"center\" style=\"padding:0;Margin:0\">
                            <table class=\"es-footer-body\" cellspacing=\"0\" cellpadding=\"0\"
                                   bgcolor=\"#ffffff\" align=\"center\" role=\"none\"
                                   style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#939393;width:600px\">
                                <tr>
                                    <td align=\"left\"
                                        style=\"Margin:0;padding-right:30px;padding-left:30px;padding-top:35px;padding-bottom:35px\">
                                        <!--[if mso]>
                                        <table style=\"width:540px\" cellpadding=\"0\"
                                               cellspacing=\"0\">
                                            <tr>
                                                <td style=\"width:235px\" valign=\"top\">
                                        <![endif]-->
                                        <table cellspacing=\"0\" cellpadding=\"0\"
                                               align=\"left\" class=\"es-left\" role=\"none\"
                                               style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left\">
                                            <tr>
                                                <td class=\"es-m-p20b\" align=\"left\"
                                                    style=\"padding:0;Margin:0;width:235px\">
                                                    <table width=\"100%\" cellspacing=\"0\"
                                                           cellpadding=\"0\"
                                                           role=\"presentation\"
                                                           style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                                        <tr>
                                                            <td align=\"left\"
                                                                style=\"padding:0;Margin:0;padding-bottom:5px\">
                                                                <h1 style=\"Margin:0;font-family:Montaga, Arial, serif;mso-line-height-rule:exactly;letter-spacing:0;font-size:30px;font-style:normal;font-weight:normal;line-height:36px;color:#2C2C2C\">
                                                                    Contact Us</h1></td>
                                                        </tr>
                                                        <tr>
                                                            <td align=\"left\"
                                                                style=\"padding:0;Margin:0;padding-bottom:5px;padding-top:15px\">
                                                                <p style=\"Margin:0;mso-line-height-rule:exactly;font-family:Lexend, Arial, sans-serif;line-height:21px;letter-spacing:0;color:#2C2C2C;font-size:14px\">
                                                                    <br>gymworld135@gmail.com
                                                                </p></td>
                                                        </tr>
                                                        <tr>
                                                            <td align=\"left\"
                                                                style=\"padding:0;Margin:0;padding-bottom:5px;padding-top:5px\">
                                                                <p style=\"Margin:0;mso-line-height-rule:exactly;font-family:Lexend, Arial, sans-serif;line-height:21px;letter-spacing:0;color:#2C2C2C;font-size:14px\">
                                                                    <a target=\"_blank\"
                                                                       style=\"mso-line-height-rule:exactly;text-decoration:none;color:#2C2C2C;font-size:14px\"
                                                                       href=\"tel:+(000)123456789\">+(216)
                                                                        28</a> 435 459</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align=\"left\"
                                                                style=\"padding:0;Margin:0;padding-bottom:5px;padding-top:5px\">
                                                                <p style=\"Margin:0;mso-line-height-rule:exactly;font-family:Lexend, Arial, sans-serif;line-height:21px;letter-spacing:0;color:#2C2C2C;font-size:14px\">
                                                                    Centre Urbain Nord
                                                                    ,Tunisie<br>index 1082
                                                                </p></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <!--[if mso]></td>
                                        <td style=\"width:20px\"></td>
                                        <td style=\"width:285px\" valign=\"top\"><![endif]-->
                                        <table cellpadding=\"0\" cellspacing=\"0\"
                                               class=\"es-right\" align=\"right\" role=\"none\"
                                               style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right\">
                                            <tr>
                                                <td align=\"left\"
                                                    style=\"padding:0;Margin:0;width:285px\">
                                                    <table cellpadding=\"0\" cellspacing=\"0\"
                                                           width=\"100%\"
                                                           role=\"presentation\"
                                                           style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                                        <tr>
                                                            <td align=\"left\"
                                                                style=\"padding:0;Margin:0\">
                                                                <p style=\"Margin:0;mso-line-height-rule:exactly;font-family:Lexend, Arial, sans-serif;line-height:21px;letter-spacing:0;color:#2C2C2C;font-size:14px\">
                                                                    ​</p></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <!--[if mso]></td></tr></table><![endif]--></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table class=\"es-footer\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"
                       role=\"none\"
                       style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:100%;table-layout:fixed !important;background-color:transparent;background-repeat:repeat;background-position:center top\">
                    <tr>
                        <td align=\"center\" style=\"padding:0;Margin:0\">
                            <table class=\"es-footer-body\" cellspacing=\"0\" cellpadding=\"0\"
                                   align=\"center\"
                                   style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px\"
                                   role=\"none\">
                                <tr>
                                    <td align=\"left\"
                                        style=\"Margin:0;padding-top:20px;padding-bottom:20px;padding-right:20px;padding-left:20px\">
                                        <table cellspacing=\"0\" cellpadding=\"0\"
                                               width=\"100%\" role=\"none\"
                                               style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                            <tr>
                                                <td align=\"left\"
                                                    style=\"padding:0;Margin:0;width:560px\">
                                                    <table width=\"100%\" cellspacing=\"0\"
                                                           cellpadding=\"0\" role=\"none\"
                                                           style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
                                                        <tr>
                                                            <td align=\"center\"
                                                                style=\"padding:0;Margin:0;display:none\"></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
</body>
</html>
", "registration/confirmation_email.html.twig", "C:\\Users\\AnasK\\Documents\\Gym\\gymworld\\templates\\registration\\confirmation_email.html.twig");
    }
}
