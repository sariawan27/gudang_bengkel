<div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('jenis_barang/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('jenis_barang/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('jenis_barang'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="bsc-tbl-bdr">
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
        <th>Jenis Barang</th>
        <th>Action</th>
            </tr><?php
            foreach ($jenis_barang_data as $jenis_barang)
            {
                ?>
                <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td><?php echo $jenis_barang->jenis_barang ?></td>
            <td style="text-align:center" width="200px">
                <?php 
                echo anchor(site_url('jenis_barang/update/'.$jenis_barang->id_jenis),'Update'); 
                echo ' | '; 
                echo anchor(site_url('jenis_barang/delete/'.$jenis_barang->id_jenis),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                ?>
            </td>
        </tr>
                <?php
            }
            ?>
        </table>
        </div>
        <div class="row">
            <div class="col-md-2">
                Total Record : <?php echo $total_rows ?>
            </div>
            <div class="col-md-10 text-right">
                <?php echo $pagination ?>
            </div>
        </div>