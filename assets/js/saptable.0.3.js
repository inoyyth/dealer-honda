/*
 * 
 * Sapta-table
 * By Sapta Marga Helmy
 * 
 * Simple Ajax Table
 * Selasa, 30 Januari 2017
 * Jakarta Timur
 */
(function ($) {

    $.fn.sapTable = function (options) {
        options = $.extend({}, $.fn.sapTable.defaultOptions, options);

        $(this).each(function (nmr, vle) {

            idElement = ($(this).attr('id'));
            var url = options.url;
            formatters = options.formatters;
            cSearch = options.cSearch;

            var table = $("#" + idElement).addClass('sapTable');
            var tbody = $('#' + idElement + ' tbody');
            var row = '';
            var kolom = $("#" + idElement).getColumn(idElement);
            $.getJSON(url, function (data) {

                for (index = 0; index < data.rows.length; ++index) {
                    rows = data.rows[index];
                    row = $('<tr></tr>');
                    $.map(kolom, function (nmkolom) {
                        var nkolom = nmkolom.indexOf('.');
                        //console.log(nkolom + ". " + nmkolom);
                        if (nkolom > -1) {
                            var dtkolom = nmkolom.split('.');
                            var vkolom = data.rows[index][dtkolom[0]][dtkolom[1]];
                        } else {
                            var vkolom = data.rows[index][nmkolom];
                        }

                        //console.log(index + ". " + data.rows[index]['u_object']);
                        if (typeof vkolom !== 'undefined') {
                            if (vkolom == null) {
                                vkolom = '';
                            }
                            var rowData = $('<td></td>').addClass('rowTable').text(vkolom);
                            row.append(rowData);
                        } else {
                            // Function to be string first
                            var funcCall = "formatters." + nmkolom;
                            //console.log(eval(funcCall));
                            if (typeof eval(funcCall) == 'function') {
                                // Initialize Function
                                var iniFunc = eval(funcCall + "()");
                                // Store data content in Function
                                var rowData = $('<td></td>').addClass('rowTable').html(iniFunc);
                                // Append data to row
                                row.append(rowData);
                            } else {
                                //console.log(nmkolom);
                                var rowData = $('<td></td>').addClass('rowTable').text(nmkolom);
                                row.append(rowData);
                            }
                        }

                    });
                    tbody.append(row);
                }

                // Get Data For Display Records
                //$.fn.recordTable(data, idElement);
                var recordTbl = $.fn.recordTable(data, vle.id);

                // For Display Pagination
                $.fn.showPagination(data, vle.id, url);


            });
            // Set allRows to Get All Rows Data
            allRows = options.getAllRows;
            if (options.showSearch == true) {
// Set Search Table
                $.fn.search_sapTable(vle.id, url);
            }

// Set Display Records
            $.fn.showRecordTable(options.countLimit, vle.id);
            $.fn.getColumn(vle.id);
        });
        return $(this);
    };
    $.fn.sapTable.defaultOptions = {
        url: '',
        formatters: {},
        cSearch: {},
        getAllRows: null,
        countLimit: [10, 25, 50, 75, 100],
        showPagination: false,
        showSearch: false
    };
    $.fn.refresh_sapTable = function (idElem) {
        var table = $("#" + idElem).addClass('sapTable');
        var tbody = $('#' + idElem + ' tbody');
        var kolom = $("#" + idElem).getColumn(idElem);
        tbody.empty();
        var row = '';
        $.getJSON(url, function (data) {
            //rows = data.rows;
            for (index = 0; index < data.rows.length; ++index) {
                rows = data.rows[index];
                // Add row here
                row = $('<tr></tr>');
                // Mapping columns
                $.map(kolom, function (nmkolom) {
                    var nkolom = nmkolom.indexOf('.');
                    // if found dot character in column, will process here
                    if (nkolom > -1) {
                        var dtkolom = nmkolom.split('.');
                        var vkolom = data.rows[index][dtkolom[0]][dtkolom[1]];
                    } else {
                        var vkolom = data.rows[index][nmkolom];
                    }

                    // column is not undefined
                    if (typeof vkolom !== 'undefined') {
                        if (vkolom == null) {
                            vkolom = '';
                        }
                        var rowData = $('<td></td>').addClass('rowTable').text(vkolom);
                        row.append(rowData);
                    } else {
                        // Function to be string first
                        var funcCall = "formatters." + nmkolom;
                        // Check column is function or not
                        if (typeof eval(funcCall) == 'function') {
                            // Initialize Function
                            var iniFunc = eval(funcCall + "()");
                            // Store data content in Function
                            var rowData = $('<td></td>').addClass('rowTable').html(iniFunc);
                            // Append data to row
                            row.append(rowData);
                        } else {
                            // Column without data
                            var rowData = $('<td></td>').addClass('rowTable').text(nmkolom);
                            row.append(rowData);
                        }
                    }

                });
                tbody.append(row);
            }

            var recordTbl = $.fn.recordTable(data, idElem);
            $(recordTbl).insertAfter("#" + idElem);

            $.fn.showPagination(data, idElem, url);

        });
    };
    $.fn.getRecord = function (data) {
        return data;
    };
    $.fn.recordTable = function (data, idElem) {
        $.fn.allRows = data;
        var climit = $("select[name='" + idElem + "_length']").val();
        var cClass = idElem + "_cRowCount";
        $('body').find("." + cClass).remove();
        var recordTbl = '<div class="col-md-6 col-xs-12 pull-left ' + cClass + '">\n\
                    <span class="sRowCount">Show ' + (parseInt(data.current) + 1) + ' to ' + data.rowCount + ' of ' + data.total + ' entries</span>\n\
                </div>';
        $(recordTbl).insertAfter("#" + idElem);
    };
    $.fn.showRecordTable = function (countLimit, idElem, url) {
        var showRecordTbl = '<div class="col-md-6 col-xs-12 pull-left">\n\
                        <div class="col-md-1 col-xs-4">Show</div><div class="col-md-4 col-xs-4">\n\
                        <select name="' + idElem + '_length" class="form-control">';
        $.each(countLimit, function (key, data) {
            showRecordTbl += '<option value="' + data + '">' + data + '</option>';
        });
        showRecordTbl += '</select></div>\n\
                        <div class="col-md-4 col-xs-4">Entries</div>\n\
                        </div>';
        $(showRecordTbl).insertBefore("#" + idElem);
        _this = this;
        $("select[name='" + idElem + "_length']").change(function () {
            var idSelect = $('#' + idElem + '_search_param').val();
            var searchParam = $("input[name='" + idElem + "_sparam']").val();
            var climit = $(this).val();
            // Set Params For Search or Pagination or Show Entries
            var sParams = [];
            sParams['idSelect'] = idSelect;
            sParams['searchParam'] = searchParam;
            sParams['climit'] = climit;
            sParams['cOffset'] = 0;
            $.fn.search_proses(sParams, idElem, url);
        })
    };
    $.fn.search_proses = function (params, idElem, url) {
        var search_url = url + "?field=" + params['idSelect'] + "&value=" + params['searchParam'] + "&climit=" + params['climit'] + "&cOffset=" + params['cOffset'];
        var table = $("#" + idElem).addClass('sapTable');
        var tbody = $('#' + idElem + ' tbody');
        var kolom = $("#" + idElem).getColumn(idElem);
        tbody.empty();
        var row = '';
        $.getJSON(search_url, function (data) {
            //rows = data.rows;
            for (index = 0; index < data.rows.length; ++index) {
                rows = data.rows[index];
                // Add row here
                row = $('<tr></tr>');
                // Mapping columns
                $.map(kolom, function (nmkolom) {
                    var nkolom = nmkolom.indexOf('.');
                    // if found dot character in column, will process here
                    if (nkolom > -1) {
                        var dtkolom = nmkolom.split('.');
                        var vkolom = data.rows[index][dtkolom[0]][dtkolom[1]];
                    } else {
                        var vkolom = data.rows[index][nmkolom];
                    }

                    // column is not undefined
                    if (typeof vkolom !== 'undefined') {
                        if (vkolom == null) {
                            vkolom = '';
                        }
                        var rowData = $('<td></td>').addClass('rowTable').text(vkolom);
                        row.append(rowData);
                    } else {
                        // Function to be string first
                        var funcCall = "formatters." + nmkolom;
                        // Check column is function or not
                        if (typeof eval(funcCall) == 'function') {
                            // Initialize Function
                            var iniFunc = eval(funcCall + "()");
                            // Store data content in Function
                            var rowData = $('<td></td>').addClass('rowTable').html(iniFunc);
                            // Append data to row
                            row.append(rowData);
                        } else {
                            // Column without data
                            var rowData = $('<td></td>').addClass('rowTable').text(nmkolom);
                            row.append(rowData);
                        }
                    }

                });
                tbody.append(row);
            }

            $.fn.recordTable(data);

            $.fn.showPagination(data, idElem, search_url);

        });
    };
    $.fn.search_sapTable = function (idElem, url) {
        var searchHtml = '<div class="col-md-6 col-xs-12 pull-right">\n\
                        <div class="input-group"> \n\
                            <div class="input-group-btn search-panel">\n\
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">\n\
                                    <span id="search_concept">Filter by</span> <span class="caret"></span>\n\
                                </button>\n\
                                <ul class="dropdown-menu search_sapTable" role="menu">';
        $.map(cSearch, function (dt, key) {
            searchHtml += '<li><a href="#' + key + '">' + dt + '</a></li>';
        });
        searchHtml += '</ul>\n\
                            </div>\n\
                            <input type="hidden" name="search_param" value="all" id="' + idElem + '_search_param">\n\
                            <input type="text" class="form-control" name="' + idElem + '_sparam" class="' + idElem + '_sparam" placeholder="Search term..." disabled>\n\
                        </div>\n\
                    </div>';
        $(searchHtml).insertBefore("#" + idElem);
        $('.search-panel .dropdown-menu').find('a').click(function (e) {
            e.preventDefault();
            var param = $(this).attr("href").replace("#", "");
            var concept = $(this).text();
            $('.search-panel span#search_concept').text(concept);
            $('#' + idElem + '_search_param').val(param);
            if (param != "") {
                $("input[name='" + idElem + "_sparam']").removeAttr('disabled');
            }
        });
        _this = this;
        $("input[name='" + idElem + "_sparam']").focusout(function () {
            var idSelect = $('#' + idElem + '_search_param').val();
            var searchParam = $(this).val();
            var climit = $("select[name='" + idElem + "_length']").val();
            // Set Params For Search or Pagination or Show Entries
            var sParams = [];
            sParams['idSelect'] = idSelect;
            sParams['searchParam'] = searchParam;
            sParams['climit'] = climit;
            sParams['cOffset'] = 0;
            $.fn.search_proses(sParams, idElem, url);
        })
    };
    $.fn.showPagination = function (allRows, idElem, url) {
        $("." + idElem + "_paging").remove();
        
        var pagHtml = '<div class="col-md-6 col-xs-12 pull-right text-right ' + idElem + '_paging">';
        pagHtml += '</div>';
        $(pagHtml).insertAfter("#" + idElem);
        
        this.pagination({
            itemsPerPage: allRows.rowCount,
            itemsToPaginate: allRows.total,
            paginationContainer: '.' + idElem + '_paging',
            idElem: idElem,
            url: url
        });
    };
    $.fn.pagination = function (optionsPaginate) {
        var paginationContainer;
        var itemsToPaginate = this;
        var defaults = {
            itemsPerPage: 5
        };

        var options = {};
        $.extend(options, defaults, optionsPaginate);
        var itemsPerPage = options.itemsPerPage;
        paginationContainer = $(options.paginationContainer);
        itemsToPaginate = $(options.itemsToPaginate);
        var numberOfPaginationLinks = Math.ceil(parseInt(itemsToPaginate[0]) / parseInt(itemsPerPage));
        //console.log(options);

        $("<ul class='pagination'></ul>").prependTo(paginationContainer);
        for (var index = 0; index < numberOfPaginationLinks; index++) {
            if ((_this.activePage - 1) == index) {
                paginationContainer.find("ul").append("<li class='active'><a href='javascript:void(0)' onclick='$.fn.getPage(" + (index + 1) + "," + options.idElem + "," + options.url + ")+ '>" + (index + 1) + "</a></li>");
            } else {
                // Get Page For Data
                paginationContainer.find("ul").append("<li><a href='javascript:void(0)' onclick='$.fn.getPage(" + (index + 1) + "," + options.idElem + "," + options.url + ")'>" + (index + 1) + "</a></li>");
            }
        }

        itemsToPaginate.filter(":gt(" + (itemsPerPage - 1) + ")").hide();
        paginationContainer.find("ul li").on('click', function () {

            var linkNumber = $(this).text();
            var itemsToHide = itemsToPaginate.filter(":lt(" + ((linkNumber - 1) * itemsPerPage) + ")");
            //console.log(((linkNumber - 1) * itemsPerPage));

            $.merge(itemsToHide, itemsToPaginate.filter(":gt(" + (linkNumber * itemsPerPage - 1) + ")"));
            itemsToHide.hide();
            var itemsToShow = itemsToPaginate.not(itemsToHide);
            itemsToShow.show();
        });
    };
    $.fn.getPage = function (nomor, idElem, url) {
        _this.activePage = nomor;
        var idSelect = $('#' + idElem + '_search_param').val();
        var searchParam = $("input[name='" + idElem + "_sparam']").val();
        var climit = $("select[name='" + idElem + "_length']").val();
        // Set Params For Search or Pagination or Show Entries
        var sParams = [];
        sParams['idSelect'] = idSelect;
        sParams['searchParam'] = searchParam;
        sParams['climit'] = climit;
        sParams['cOffset'] = ((nomor - 1) * climit);
        $.fn.search_proses(sParams, idElem, url);
    };
    $.fn.getColumn = function (idElem) {
        var columnHeader = $("#" + idElem + " thead tr th").data('options');
        var columnOptions = $("#" + idElem + " thead").find('th').data('options');
        var list = $("#" + idElem + " thead tr th").map(function () {
            return $(this).data("options");
        }).get();
        return list;
    };
    $.fn.pagination2 = function (options) {
        var paginationContainer;
        var itemsToPaginate = this;
        var defaults = {
            itemsPerPage: 5
        };
        var options = {};
        $.extend(options, defaults, options);
        var itemsPerPage = options.itemsPerPage;
        //paginationContainer = $(options.paginationContainer);
        itemsToPaginate = $(options.itemsToPaginate);
        var numberOfPaginationLinks = Math.ceil(itemsToPaginate.lenght / itemsPerPage);
        $("<ul></ul>").prependTo(paginationContainer);
        for (var index = 0; index < numberOfPaginationLinks; index++) {
            paginationContainer.find("ul").append("<li>" + (index + 1) + "</li>");
        }

        itemsToPaginate.filter(":gt(" + (itemsPerPage - 1) + ")").hide();
        paginationContainer.find("ul li").on('click', function () {

            var linkNumber = $(this).text();
            var itemsToHide = itemsToPaginate.filter(":lt(" + ((linkNumber - 1) * itemsPerPage) + ")");
            $.merge(itemsToHide, itemsToPaginate.filter(":gt(" + (linkNumber * itemsPerPage - 1) + ")"));
            itemsToHide.hide();
            var itemsToShow = itemsToPaginate.not(itemsToHide);
            itemsToShow.show();
        });
    }
})(jQuery)

