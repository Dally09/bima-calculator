<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>APA INSURANCE</title>
    <!-- <link rel="stylesheet" href="css/customer.css" media="screen"> -->
    <!--
    <?php include 'views/head_links.php'; ?>
    -->

</head>

<body>
        <!-- =====================================DOMESTIC PACKAGE CALCULATOR ===================================== -->
<div>
    <h3 class="title-text">Vehicle Details</h3>
    <hr>
    <form novalidate="novalidate" class="v-form tw-mt-5 tw-w-full">
        <div class="tw-w-full tw-flex flex-wrap md:flex-no-wrap">
            <div class="v-input tw-w-full md:tw-w-1/2 tw-mt-6 md:tw-mt-0 mx-4 v-input--has-state v-input--hide-details theme--light v-text-field v-text-field--is-booted v-select v-autocomplete error--text">
                <div class="v-input__control">
                    <div role="combobox" aria-haspopup="listbox" aria-expanded="false" aria-owns="list-31" class="v-input__slot">
                        <div class="v-select__slot">
                            <label for="carMakes" class="v-label theme--light error--text" style="left: 0px; right: auto; position: absolute;">Vehicle Make</label>
                            <br>
                            <input id="carMakes" type="text" autocomplete="off">
                            <div class="v-input__icon v-input__icon--append">
                                <i aria-hidden="true" class="v-icon notranslate mdi mdi-menu-down theme--light error--text">
                                </i>
                            </div>
                        </div>
                        <input type="hidden">
                    </div>
                    <div class="v-menu">
                     <!---->
                    </div>
                </div>
            </div>
        </div>

        <div class="v-input tw-w-full md:tw-w-1/2 tw-mt-6 md:tw-mt-0 mx-4 v-input--has-state v-input--hide-details theme--light v-text-field v-text-field--is-booted v-select v-autocomplete error--text">
            <div class="v-input__control">
                <div role="combobox" aria-haspopup="listbox" aria-expanded="false" aria-owns="list-34" class="v-input__slot">
                    <div class="v-select__slot">
                        <label for="carModels" class="v-label theme--light error--text" style="left: 0px; right: auto; position: absolute;">Vehicle Model</label>
                        <br>
                        <input id="carModels" type="text" autocomplete="off">
                        <div class="v-input__append-inner">
                            <div class="v-input__icon v-input__icon--append">
                                <i aria-hidden="true" class="v-icon notranslate mdi mdi-menu-down theme--light error--text"></i>
                            </div>
                        </div>
                        <input type="hidden">
                    </div>
                    <div class="v-menu">
                     <!---->
                    </div>
                </div>
            </div>
        </div>
        
        <div class="tw-w-full tw-flex tw-mt-2 md:tw-mt-16 tw-flex-wrap md:tw-flex-no-wrap">
            <div class="tw-w-full md:tw-w-1/2 tw-mt-6 md:tw-mt-0 ">
                <div class="v-input mx-4 tw-mb-5 v-input--hide-details theme--light v-text-field v-text-field--is-booted v-select v-autocomplete">
                    <div class="v-input__control">
                        <div role="combobox" aria-haspopup="listbox" aria-expanded="false" aria-owns="list-45" class="v-input__slot">
                            <div class="v-select__slot">
                                <label for="year" class="v-label theme--light" style="left: 0px; right: auto; position: absolute;">Year of Manufacture</label>
                                <br>
                                <input id="year" type="number" autocomplete="off">
                                <div class="v-input__append-inner">
                                    <div class="v-input__icon v-input__icon--append">
                                        <i aria-hidden="true" class="v-icon notranslate mdi mdi-menu-down theme--light">
                                        </i>
                                    </div>
                                </div>
                                <input type="hidden">
                                </div>
                                <div class="v-menu">
                                    <!---->
                            </div>
                        </div>
                    </div>
                </div>
                <small class="c-yellow-text tw-italic">
                    <i aria-hidden="true" class="v-icon notranslate mdi mdi-information-outline theme--light secondary--text" style="font-size: 14px;">
                    </i>
                    "Maximum years for Comprehensive cover is 12 years (2010)"
                </small>
            </div>
    </form>

</div>

    <!-- =====================================FOOTER===================================== -->

</body>
</html>